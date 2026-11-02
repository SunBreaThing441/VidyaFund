# VidyaFund — Comprehensive Scholarship & Grant Management Platform

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/PHP-7.4%20|%208.x-777BB4?logo=php&logoColor=white)](https://php.net)
[![Database](https://img.shields.io/badge/Database-MySQL%20|%20MariaDB-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com)
[![Status](https://img.shields.io/badge/Status-Active%20Production-success)]()

**VidyaFund** is a premier digital educational grant and scholarship lifecycle management system designed to democratize scholastic financial support. It establishes a verifiable, multi-tenant governance framework connecting **Students**, **Institutional Signatories**, and **System Administrators** for transparent scholarship publication, merit/need evaluation, document verification, and sanction tracking.

---

## 🌟 Executive Overview

In alignment with educational equity and UN Sustainable Development Goal 4 (Quality Education), **VidyaFund** bridges the divide between students seeking educational funding and academic institutions or philanthropic foundations providing grants.

The platform eliminates manual paperwork, delays, and verification bottlenecks through three dedicated operational portals:
1. **Scholar / Student Portal**: Profile onboarding, academic dossier compilation, multi-category scholarship discovery, real-time application tracking.
2. **Institutional Signatory Portal**: Grant program creation, eligibility criteria management, student application scrutiny, appraisal decisions.
3. **Administrative Command Console**: Master validation of student identities and institutional signatories, catalog curation, system-wide analytics, and audit logging.

---

## 🚀 Key Features

### 🎓 For Students
- **Personalized Dashboard**: View real-time status of submitted applications (Pending, Accepted, Rejected).
- **Categorized Discovery**: Browse merit-based, study-based, physically-challenged, and minority-targeted scholarship opportunities.
- **Dossier & Document Upload**: Upload academic credentials, income declarations, and identification documents securely.
- **Account Management & Recovery**: Secure authentication with password reset mechanisms.

### 🏛️ For Signatories (Universities & Sponsors)
- **Scholarship Publishing**: Create, update, or archive scholarship offerings with custom criteria and allowances.
- **Application Dossier Review**: Inspect submitted academic histories, attached proofs, and candidate declarations.
- **Evaluation Engine**: Accept or reject applicant profiles with immediate audit updates.

### 🛡️ For Administrators
- **User Validation & Verification**: Approve or suspend student and signatory registrations.
- **Scholarship Oversight**: Moderate published scholarships before they go live on the public registry.
- **Data Governance**: Maintain platform integrity across all active schemes and applicant databases.

---

## 🛠️ Technology Stack

| Layer | Technologies |
| :--- | :--- |
| **Frontend** | HTML5, CSS3, JavaScript (ES6+), Bootstrap 3.3.7, Font Awesome, Owl Carousel, Magnific Popup |
| **Backend** | PHP 7.4+ / 8.x |
| **Database** | MySQL / MariaDB (`sms` database) |
| **Mail Dispatch** | PHPMailer 5.2 (SMTP over TLS/SSL) |
| **Server** | Apache HTTP Server / Nginx / XAMPP |

---

## 📂 Project Structure

```text
VidyaFund/
├── admin/                     # Administrative command center & appraisal console
│   ├── tempAdmin.php          # Admin dashboard & metrics
│   ├── tempAcceptedApp.php    # Accepted grants registry
│   ├── tempPendingApp.php     # Pending application queue
│   ├── tempRejectedApp.php    # Rejected applications log
│   ├── tempScholarship.php    # Scholarship registry manager
│   ├── tempSignatoryShow.php  # Signatory verification panel
│   └── tempStudentShow.php    # Student credential inspection
├── applications/              # Application tracking & document storage
├── backend/                   # Database engine, SQL migrations, & authentication
│   ├── login.php              # Multi-tenant login controller
│   ├── scholarship_data.xml   # Seed data definitions
│   └── scholarship_management_system.sql # Master MySQL database schema
├── css/                       # UI stylesheets, responsive layouts, & theme skins
├── font-awesome/              # Font Awesome icon library
├── fonts/                     # Web fonts & typography assets
├── images/                    # UI illustrations, banners, & category graphics
├── js/                        # Client-side scripts & form validators
├── PHPMailer/                 # Transactional email service
├── scholarship/               # Scholarship details & rendering views
├── signatory/                 # Sponsoring institution management portal
│   ├── tempSigHome.php        # Signatory dashboard
│   ├── tempAddScholarship.php # Grant authoring console
│   └── tempSigApplication.php # Application appraisal panel
├── student/                   # Student candidate portal
│   ├── tempUserHome.php       # Student dashboard & applied grants
│   ├── apply.php              # Application intake pipeline
│   └── tempUserProfile.php    # Student academic profile & documents
├── index.php                  # Public portal landing page
├── forgotpassword.php         # Password recovery workflow
├── signup.php                 # Registration routing hub
├── signup_student.php         # Student registration form
├── signup_sig.php             # Signatory registration form
├── .gitignore                 # Version control exclusions
├── LICENSE                    # MIT License
└── README.md                  # System documentation
```

---

## ⚙️ Installation & Setup

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (or any Apache + PHP 7.4+/8.x + MySQL stack)
- Modern web browser (Chrome, Firefox, Edge, Safari)
- Git

### 1. Database Configuration
1. Start **Apache** and **MySQL** services in your local server control panel (e.g., XAMPP).
2. Open [phpMyAdmin](http://localhost/phpmyadmin).
3. Create a new database named `sms`:
   ```sql
   CREATE DATABASE `sms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```
4. Import the provided schema:
   - Navigate to the `Import` tab in phpMyAdmin.
   - Select `backend/scholarship_management_system.sql`.
   - Click **Go** to generate all tables and default records.

### 2. Deployment
1. Clone or copy the project into your web server's root directory (e.g., `C:/xampp/htdocs/VidyaFund`).
2. Verify database connection credentials in `forgotpassword.php`, `signup_sig.php`, `signup_student.php`, etc. (defaults to `localhost`, `root`, without password).
3. Access the portal in your browser:
   ```
   http://localhost/VidyaFund/index.php
   ```

---

## 👥 Default Roles & Credentials

Default seed accounts from `scholarship_management_system.sql`:
- **Admin**: Accessible via the administrative console
- **Signatory**: Register via `signup_sig.php` or use seed credentials
- **Student**: Register via `signup_student.php` or use seed credentials

---

## 📄 License
This project is licensed under the MIT License — see the [LICENSE](LICENSE) file for details.
