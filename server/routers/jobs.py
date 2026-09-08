from fastapi import APIRouter, Depends, HTTPException, status
from sqlalchemy.orm import Session

from database import get_db
from models.job import Job
from schemas.job import JobCreate, JobResponse, JobUpdate

router = APIRouter()


def get_job_or_404(
    job_id: int,
    db: Session,
) -> Job:
    job = db.get(Job, job_id)

    if not job:
        raise HTTPException(
            status_code=status.HTTP_404_NOT_FOUND,
            detail="Job not found",
        )

    return job


@router.get("/", response_model=list[JobResponse])
def get_jobs(
    db: Session = Depends(get_db),
):
    return db.query(Job).all()


@router.get("/{job_id}", response_model=JobResponse)
def get_job(
    job_id: int,
    db: Session = Depends(get_db),
):
    return get_job_or_404(job_id, db)


@router.post(
    "/",
    response_model=JobResponse,
    status_code=status.HTTP_201_CREATED,
)
def create_job(
    job_data: JobCreate,
    db: Session = Depends(get_db),
):
    new_job = Job(
        title=job_data.title,
        description=job_data.description,
    )

    db.add(new_job)
    db.commit()
    db.refresh(new_job)

    return new_job


@router.put(
    "/{job_id}",
    response_model=JobResponse,
)
def update_job(
    job_id: int,
    job_data: JobUpdate,
    db: Session = Depends(get_db),
):
    job = get_job_or_404(job_id, db)

    if job_data.title is not None:
        job.title = job_data.title

    if job_data.description is not None:
        job.description = job_data.description

    db.commit()
    db.refresh(job)

    return job


@router.patch(
    "/{job_id}/complete",
    response_model=JobResponse,
)
def complete_job(
    job_id: int,
    db: Session = Depends(get_db),
):
    job = get_job_or_404(job_id, db)

    job.status = "Closed"

    db.commit()
    db.refresh(job)

    return job


@router.delete(
    "/{job_id}",
    status_code=status.HTTP_204_NO_CONTENT,
)
def delete_job(
    job_id: int,
    db: Session = Depends(get_db),
):
    job = get_job_or_404(job_id, db)

    db.delete(job)
    db.commit()
