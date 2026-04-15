# 🚀 AWS PHP DevOps Platform

Production-style deployment of a containerized PHP application using Docker, AWS, and CI/CD with GitHub Actions.

---

## 📌 Overview

This project demonstrates an end-to-end DevOps workflow where a PHP application is:

* Containerized using Docker
* Built and pushed to Amazon ECR
* Automatically deployed to EC2 via GitHub Actions
* Connected to AWS RDS (MySQL)

Every push to the `main` branch triggers the pipeline.

---

## 🏗️ Architecture

GitHub → GitHub Actions → Docker Build → Amazon ECR → EC2 → RDS

---

## ⚙️ Tech Stack

* **Backend:** PHP
* **Containerization:** Docker
* **CI/CD:** GitHub Actions
* **Cloud:** AWS (EC2, ECR, RDS)
* **Database:** MySQL (RDS)

---

## 🔄 CI/CD Workflow

1. Code pushed to GitHub (`main` branch)
2. GitHub Actions triggers pipeline
3. Docker image is built
4. Image is pushed to Amazon ECR
5. EC2 instance pulls latest image
6. Container is restarted with updated code

---

## 📂 Project Structure

```
.
├── .github/workflows/    # CI/CD pipeline
├── app/                  # PHP application code
├── docker/               # Dockerfile
├── README.md
```

---

## 🔐 Secrets Used

Stored in GitHub Secrets:

* `AWS_ACCESS_KEY_ID`
* `AWS_SECRET_ACCESS_KEY`
* `AWS_REGION`
* `ECR_REPOSITORY`
* `EC2_HOST`
* `EC2_USER`
* `EC2_SSH_KEY`
* `DB_PASSWORD`

---

## 🚀 How to Run Locally

```bash
# Build image
docker build -t php-app -f docker/Dockerfile .

# Run container
docker run -d -p 80:80 php-app
```

---

## 🌐 Deployment

Application is deployed on AWS EC2 and connected to AWS RDS.

Each commit to `main` automatically updates the live application.

---

## 📈 Future Improvements

* Add domain & HTTPS (Nginx + SSL)
* Use IAM Roles instead of access keys
* Add monitoring (CloudWatch)
* Implement health checks & auto-restart
* Move to ECS or Kubernetes

---

## 📬 Author

**Mohan**
GitHub: https://github.com/Mohan006007

---

## ⭐ Note

This project is designed to demonstrate real-world DevOps practices for beginners and aspiring engineers.
