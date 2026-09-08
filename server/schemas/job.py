from pydantic import BaseModel


class JobCreate(BaseModel):
    title: str
    description: str
    status: str | None = "Open"

class JobUpdate(BaseModel):
    title: str | None = None
    description: str | None = None
    status: str | None = None

class JobResponse(BaseModel):
    id: int
    title: str
    description: str
    status: str

    class Config:
        from_attributes = True