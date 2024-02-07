import pytest
from app import app

@pytest.fixture
def client():
    app.config['TESTING'] = True  # Enable testing mode
    client = app.test_client()

    yield client

def test_hello_route_returns_correct_response(client):
    response = client.get('/')
    assert response.status_code == 200
    assert b'Hello World! I have been seen ' in response.data
