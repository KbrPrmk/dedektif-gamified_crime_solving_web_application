# 🕵️‍♂️ Dedektif: Gamified Crime-Solving Web Application

[![PHP Version](https://img.shields.io/badge/PHP-8.1%2B-777bb4?style=flat-square&logo=php)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL-4479a1?style=flat-square&logo=mysql)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=flat-square)](LICENSE)

**Dedektif** is a PHP-driven interactive web application where users assume the role of an investigator to solve complex crime cases. The project emphasizes logical reasoning, database-driven storytelling, and progress-based gamification.

---

## ✨ Core Features

* **Interactive Investigation:** Analyze autopsy reports, laboratory findings, and suspect statements for each case.
* **Gamified Progression:** Experience-based leveling system with 5 distinct detective ranks, from *Rookie Observer* to *Legendary Master*.
* **Dynamic Hint System:** A multi-tier guidance mechanism designed to assist users based on their investigation stage.
* **Persistent Notebook:** A database-backed note-taking system allowing detectives to save findings per case.
* **Strategic Challenges:** Limited accusation attempts to maintain a realistic and challenging gameplay experience.

---

## 📂 Project Structure

The repository is organized as follows to ensure easy navigation and modularity:

```text
.
├── assets/                 # Global assets directory
│   ├── gif/                # Animation files for interactive cases
│   └── image/              # Visual assets
│       ├── katiller/       # Killer profile images
│       ├── maktuller/      # Victim profile images
│       ├── supheliler/     # Suspect profile images
│       └── giris_dedektifi.png
├── baglan.php              # Database connection and configuration
├── cikis.php               # User session termination (Logout)
├── dava_detay.php          # Detailed case investigation interface
├── dava_sonuc.php          # Case resolution logic and results
├── davalar.php             # Dashboard listing all available cases
├── dedektif.css            # Main application stylesheet
├── dedektif.js             # Core JavaScript for UI interactions
├── dedektif.php            # Main portal / Landing page
├── giris.php               # User authentication (Login)
├── hesabi_sil.php          # Account management (Delete Account)
├── kayit.php               # User registration system
├── profile.php             # Detective statistics and rank tracking
└── README.md
```
## **🛠 Tech Stack**

* **Backend:** PHP 8.1+ (Procedural with MySQLi)
* **Database:** MySQL / MariaDB (Relational Architecture)
* **Frontend:** HTML5, CSS3, Vanilla JavaScript
* **Security:** BCRYPT Password Hashing & Prepared Statements

## **⚙️ Installation & Setup**
**1. Clone the Repository**
git clone [https://github.com/KbrPrmk/detective-gamified_crime_solving_web_application.git](https://github.com/KbrPrmk/detective-gamified_crime_solving_web_application.git)
cd detective-gamified_crime_solving_web_application

**2. Database Configuration**
* Create a new database named dedektif in your local environment (e.g., phpMyAdmin).
* Import the provided SQL schema (e.g., dedektif.sql) into the database.

**3. Connection Setup**
* Open baglan.php and update your local credentials:
```text
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dedektif";
```

**4. Run the Application**
* Ensure Apache and MySQL are running.
* Navigate to http://localhost/dedektif/dedektif.php.

## **🔒 Security & Optimization**
* **SQL Injection Prevention:** Utilization of Prepared Statements to secure all database queries.
* **Secure Authentication:** Implementation of password_hash() and password_verify() for industry-standard credential protection.
* **Session Management:** Server-side session integrity checks to protect user progress and data.
