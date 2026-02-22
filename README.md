# 🕵️‍♂️ Dedektif: Gamified Crime-Solving Web Application

[![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)](https://github.com/yourusername/detective-web-app)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4.svg?logo=php)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1.svg?logo=mysql)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

**Dedektif** is a PHP-driven interactive platform where users assume the role of an investigator to solve complex crime cases. The application focuses on logical reasoning, database-driven storytelling, and progress-based gamification.

---

## ✨ Core Features

- **Interactive Investigation Room:** Examine detailed autopsy reports, laboratory findings, and suspect statements for every case.
- **Gamified Progression System:** Gain experience and rank up through 5 distinct levels, from "Rookie Observer" to "Legendary Master."
- **Hint Mechanism:** A dynamic, multi-tier hint system designed to assist users based on their investigation stage.
- **Personalized Notebook:** A persistent note-taking system allowing detectives to save their findings per case directly to the database.
- **Role-Based Limitations:** Limited accusation attempts per case to maintain a challenging and realistic gameplay experience.

---

## 🏗️ Database Architecture

The core of the application relies on a robust relational database schema to manage interconnected crime data:

- **User Management:** Tracks authentication, encrypted passwords, and detective ranks.
- **Relational Case Logic:** Links cases (`davalar`) to specific victims (`maktuller`), suspects (`supheliler`), and clues (`ipucu`) using foreign key constraints.
- **Activity Tracking:** Stores solved cases and user-specific notes to ensure persistence across sessions.

---

## 🛠️ Tech Stack

- **Backend:** PHP 8.1+ (Procedural with MySQLi)
- **Database:** MySQL / MariaDB
- **Frontend:** Responsive HTML5, CSS3, Vanilla JavaScript
- **Security:** BCRYPT Password Hashing & Prepared Statements

---

## ⚙️ Installation & Setup

1. **Clone the Project:**
   ```bash
   git clone [https://github.com/KbrPrmk/detective-gamified_crime_solving_web_application.git](https://github.com/KbrPrmk/detective-gamified_crime_solving_web_application.git)
   cd detective-gamified_crime_solving_web_application

2. **Database Configuration:**
   - Create a database named dedektif in your local environment (e.g., phpMyAdmin).
   - Import the database/schema.sql file.
     
3. **Environment Setup:**
   - Rename baglan.example.php to baglan.php.
   - Update your local credentials:

     $servername = "localhost";
     $username   = "root";
     $password   = "";
     $dbname     = "dedektif";
   
4. **Access:**
   - Start Apache/MySQL and navigate to http://localhost/dedektif.

--
## 🔒 Security & Optimization
   - **Sanitized Queries:** Implemented Prepared Statements to mitigate SQL Injection risks.
   - **Secure Authentication:** Utilizes password_hash() and password_verify() for industry-standard credential management.
   - **Session Integrity:** Server-side checks ensure that users can only access their authorized progress and data.

--
