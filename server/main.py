from fastapi import FastAPI
from routers import jobs_router

app = FastAPI(title="Job platform")

app.include_router(jobs_router, prefix="/jobs", tags=["Jobs"])

@app.get("/")
def root():
    return {"message": "Welcome to the Job platform API!"}