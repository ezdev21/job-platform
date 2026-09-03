from fastapi import APIRouter, Depends, HTTPException
from sqlalchemy.orm import Session

from database import Base, engine, get_db
from models import Job
from schemas import JobCreate, JobResponse

Base.metadata.create_all(bind=engine)

router = APIRouter()

@router.get("/", response_model=list[JobResponse])
def get_jobs(db: Session = Depends(get_db)):
    return db.query(Job).all()


@router.get("/{job_id}", response_model=JobResponse)
def get_job(job_id: int, db: Session = Depends(get_db)):
    job = db.query(Job).filter(Job.id == job_id).first()

    if not job:
        raise HTTPException(
            status_code=404,
            detail="Job not found",
        )

    return job


@router.post(
    "/",
    response_model=JobResponse,
    status_code=201,
)
def create_job(
    job: JobCreate,
    db: Session = Depends(get_db),
):
    new_job = Job(
        title=job.title,
        description=job.description,
    )

    db.add(new_job)
    db.commit()
    db.refresh(new_job)

    return new_job


@router.put("/{job_id}", response_model=JobResponse)
def update_job(
    job_id: int,
    job_data: JobCreate,
    db: Session = Depends(get_db),
):
    job = db.query(Job).filter(Job.id == job_id).first()

    if not job:
        raise HTTPException(
            status_code=404,
            detail="Job not found",
        )

    job.title = job_data.title
    job.description = job_data.description

    db.commit()
    db.refresh(job)

    return job


@router.patch("/{job_id}/complete", response_model=JobResponse)
def complete_job(
    job_id: int,
    db: Session = Depends(get_db),
):
    job = db.query(Job).filter(Job.id == job_id).first()

    if not job:
        raise HTTPException(
            status_code=404,
            detail="Job not found",
        )

    job.completed = True

    db.commit()
    db.refresh(job)

    return job


@router.delete("/{job_id}", status_code=204)
def delete_job(
    job_id: int,
    db: Session = Depends(get_db),
):
    job = db.query(Job).filter(Job.id == job_id).first()

    if not job:
        raise HTTPException(
            status_code=404,
            detail="Job not found",
        )

    db.delete(job)
    db.commit()