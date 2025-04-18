# Visitor Management App (PHP + MySQL + Docker Compose)

This is a PHP-based **Visitor Management System** designed for our security personnel to log and track visitor information. This solution is developed for **Sycatel**, a telecom service provider, by our security services team.

---

## 🧾 Features

- 📥 Add new visitors with details:
  - Name
  - Mobile No.
  - Email
  - Contact Person
  - Visit Reason (Purchasing, Enquiry, Dispute, Meeting, Presentation, Others)
  - Auto timestamp

- 📃 View:
  - All visitor entries
  - Filtered view based on **visit reason**

- 💾 Data is stored securely in a **MySQL database**

---

## 📁 Project Structure
visitor-management-app/
│
├── app/
│   ├── db.php
│   ├── index.php
│   ├── add_visitor.php
│   ├── fetch_all.php
│   ├── fetch_by_reason.php
│   └── Dockerfile
│
├── mysql/
│   └── Dockerfile
│   └── init.sql
│
└── docker-compose.ym/



---

## 🐳 Containerized Setup with Docker Compose

This project is designed to run using **Docker Compose** for easy deployment and scalability.

### ✅ Requirements

- Amazon EC2 instance (Amazon Linux 2023 on t2.medium recommended)
- Docker installed
- Docker Compose installed

---

## ⚙️ Setup Instructions on EC2

### 🐳 Install Docker

```bash
sudo hostnamectl set-hostname vm1 
sudo yum update -y
sudo yum install docker -y
sudo usermod -aG docker ec2-user
sudo systemctl start docker
sudo systemctl enable docker
exit  # log out and back in to apply group changes

### 🐳 Install Docker-compose
sudo curl -L "https://github.com/docker/compose/releases/download/$(curl -s https://api.github.com/repos/docker/compose/releases/latest | grep 'tag_name' | cut -d '"' -f 4)/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

sudo chmod +x /usr/local/bin/docker-compose
docker-compose --version

### Run the app
docker-compose build
docker-compose up

## final testing
http://localhost:8080

## if running on Ec2 instance
http://localhost:8080
