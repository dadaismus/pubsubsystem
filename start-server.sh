curl -X POST -H "Content-Type: application/json" -d '{ "url": "http://localhost:8000/event"}' http://127.0.0.1:8000/subscribe/topic1
curl -X POST -H "Content-Type: application/json" -d '{"message": "hello"}' http://127.0.0.1:8000/publish/topic1
