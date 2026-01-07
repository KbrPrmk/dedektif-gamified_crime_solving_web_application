# Dedektif – Gamified Crime Solving Web Application

Dedektif is a PHP-based gamified web application where users take on the role of a detective to solve crime cases by analyzing clues, suspects, and reports.

Users examine case reports, collect hints step by step, take notes, and attempt to identify the correct culprit with limited attempts. As more cases are solved, the user's level increases.

---

## Features

- User authentication system
- Gamified level progression
- Relational database design
- Case-based content including:
  - Incident reports
  - Clues
  - Suspects
  - Victim information (autopsy and lab reports)
  - Culprit and sentence details
- User-specific case notes
- Solved case tracking

---

## Database Design

The database consists of interconnected tables such as:

- users
- davalar (cases)
- ipucu (clues)
- supheliler (suspects)
- maktuller (victims)
- katiller (culprits)
- dedektif_notlari (detective notes)
- cozulen_davalar (solved cases)

All relationships are managed using foreign keys such as user_id and dava_id.

---

## Setup

### Requirements

- XAMPP

### Installation

1. Create a database named dedektif
2. Import or create the tables based on the project structure
3. Copy the example configuration file named baglan.example.php and rename it to baglan.php
4. Enter your local database credentials inside baglan.php

The actual database connection file is excluded from the repository for security reasons.

---

## Database Schema

The complete database schema is provided in the following file:

- database/schema.sql

This file contains all CREATE TABLE statements and table relationships required to run the application.
