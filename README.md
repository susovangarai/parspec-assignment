# Parspec Assignment - SQL Injection Demo with ModSecurity

## Overview

This project demonstrates two login pages deployed on an AWS EC2 instance:

- **Page 1**: intentionally vulnerable to SQL Injection
- **Page 2**: protected using **ModSecurity**

Both pages are exposed through a single public IP address.

## Public Links

- `http://YOUR_PUBLIC_IP/page1.html`
- `http://YOUR_PUBLIC_IP/page2.html`

> Replace `YOUR_PUBLIC_IP` with the public IP address of your EC2 instance.

---

## Objective

The goal of this assignment is to:

- host a vulnerable login form
- host a protected login form
- demonstrate SQL Injection on the vulnerable page
- prevent exploitation on the protected page using ModSecurity
- provide public access to both pages

---

## Architecture

The application is deployed on a single AWS EC2 instance with the following components:

- **Operating System**: Ubuntu Server
- **Web Server**: Apache
- **Backend**: PHP
- **Database**: SQLite
- **Web Application Firewall**: ModSecurity

### Application Flow

- `page1.html` routes to `page1.php`
- `page2.html` routes to `page2.php`
- both pages use the same SQLite database
- `page1.php` is intentionally left unprotected
- `page2.php` is protected using ModSecurity rules that block SQL Injection attempts

---

## Project Structure

```text
.
├── page1.php
├── page2.php
├── .htaccess
├── app.db
├── screenshots/
│   ├── ec2-instance.png
│   ├── page1-normal.png
│   ├── page1-sqli-success.png
│   ├── page2-normal.png
│   ├── page2-sqli-blocked.png
│   └── modsecurity-log.png
└── README.md
