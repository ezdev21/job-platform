from pydantic import BaseModel


class JobCreate(BaseModel):
    title: str
    description: str | None = None


class JobResponse(BaseModel):
    id: int
    title: str
    description: str | None

    class Config:
        from_attributes = True