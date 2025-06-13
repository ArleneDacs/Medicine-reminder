# Medicine Reminder Web App

A simple web-based Medicine Reminder application built using CodeIgniter 4. This app allows users to manage medicines with scheduling and tracking features.

---

## Features

- ✅ Add new medicine with name, dosage, and schedule
- ✅ View all medicines
- ✅ Edit or update medicine info
- ✅ Delete medicine entry
- ✅ Mark medicine as taken
- ✅ View history of taken medicines
- ✅ Search by name, dosage, or schedule

---

## Installation Instructions

### ✅ Prerequisites

- PHP ≥ 8.0.30 (included with XAMPP)
- XAMPP (for Apache and MySQL)
- CodeIgniter 4 (already included in this project folder)

---

### Setup Steps

1. **Clone, Download or Copy the Project**

    - **Clone using Git (recommended):**
        ```bash
        git clone https://github.com/ArleneDacs/Medicine-reminder.git
        ```
    - **Or download the project ZIP** from GitHub and extract it to your device.


2. **Move the Project to XAMPP's Web Directory**

    - Place the `medicine-reminder` folder inside your XAMPP `htdocs` directory (e.g., `C:\xampp\htdocs\medicine-reminder`).

3. **Set Up Environment Variables**

    - Copy the `env` file and rename it to `.env` in the project root.
    - Open `.env` in a text editor and update these lines as needed:
        ```
        app.baseURL = 'http://localhost/medicine-reminder/public'
        database.default.hostname = localhost
        database.default.database = medicine_app
        database.default.username = root
        database.default.password =
        database.default.DBDriver = MySQLi
        ```

---

## SQL Database Guidance

4. **Create Database**

    - Open phpMyAdmin (usually at [http://localhost/phpmyadmin](http://localhost/phpmyadmin)) and run:
        ```sql
        CREATE DATABASE medicine_app;
        ```

5. **Create the Table**

    - Run the following SQL in phpMyAdmin to create the `medicines` table:
        ```sql
        CREATE TABLE medicines (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            dosage VARCHAR(255) NOT NULL,
            schedule VARCHAR(255) NOT NULL,
            taken TINYINT(1) DEFAULT 0
        );
        ```

---

## How to Run the Application

## How to Run the Application

6. **Start XAMPP**

    - Open XAMPP Control Panel and start both **Apache** and **MySQL**.

7. **Run the Application in the Terminal (Optional for Built-in Server)**

    - Open Command Prompt and navigate to your project directory:
        ```bash
        cd C:\xampp\htdocs\medicine-reminder
        ```
    - Start the built-in PHP development server with CodeIgniter's spark command:
        ```bash
        php spark serve
        ```
    - Open your browser and go to: [http://localhost:8080](http://localhost:8080)

    - **Or**, if using XAMPP's Apache, open your browser and go to: [http://localhost/medicine-reminder/public](http://localhost/medicine-reminder/public)

    - You should see the Medicine Reminder home page where you can add, view, edit, or delete medicines.

## Running on Another Device

1. Copy the entire project folder to the new device.
2. Repeat the installation steps above on the new device.
3. Make sure XAMPP is installed and running on the new device.

---

For more details, see the [CodeIgniter 4 User Guide](https://codeigniter.com/user_guide/).