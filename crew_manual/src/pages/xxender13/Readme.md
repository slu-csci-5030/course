
Name: Harshil Sharma
This Docker Compose configuration assumes deployment to a swarm cluster in production. Replicas, updates, and restarts are configured forhorizontal scaling and zero-downtime deployments.
A reverse proxy would be required in production to handle routing external requests to the nginx containers. TLS termination should also happen at the proxy for security.

I learned how Docker Compose provides a simple way to define environments locally and in production. The GitHub Actions workflow also allows testing these environments automatically