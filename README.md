# Project Description

This project is a secure WordPress-based e-commerce platform designed to simulate a real-world online shopping system with a strong focus on usability, performance, and cybersecurity.
The platform is built using WordPress as the core content management system and WooCommerce as the e-commerce engine. It enables essential online shopping features such as product browsing, shopping cart management, secure checkout, and order processing, delivering a smooth and intuitive user experience similar to modern commercial websites.

# Live Website
https://digitalartandprintstore.ct.ws/?i=1

## System Architecture

A key highlight of this system is its security-first architecture. The platform is enhanced with multiple security layers to protect against common web threats and ensure safe transactions and user interactions. These include:
Web Application Firewall (WAF) for filtering and blocking malicious traffic
Malware scanning to detect and eliminate harmful code
Brute force protection to secure login attempts
Rate limiting to prevent automated abuse and DDoS-style requests
Two-factor authentication (2FA) for stronger login security
HTTPS encryption for secure data transmission

### Data Flow Diagram (DFD)

<img width="1234" height="618" alt="Data Flow Diagram" src="https://github.com/user-attachments/assets/f08403a1-6489-4ab7-b950-4e8bc424d7bd" />

On the backend, the system uses a MySQL database to securely store and manage users, products, orders, payments, and session data. The architecture follows a structured layered model consisting of:
Client Layer: Web browser interface for users
Application Layer: WordPress core and WooCommerce handling business logic
Security Layer: Security plugins monitoring and protecting the system
Database Layer: MySQL handling persistent data storage

### System Architecture Diagram

<img width="883" height="615" alt="System Architecture" src="https://github.com/user-attachments/assets/eceec962-2ab1-4791-95ac-d356001ec6f1" />

This project demonstrates how a scalable and secure e-commerce solution can be built using widely adopted open-source technologies, while maintaining both functionality and strong cybersecurity practices.

### Setup Instructions
1. Install WordPress
2. Install and activate WooCommerce
3. Configure MySQL database
4. Install security plugins (Wordfence, WP 2FA)
5. Configure HTTPS
6. Deploy on hosting platform

### Key Components
. Client Layer: Web browser interface
. Server Layer: WordPress core + WooCommerce
. Security Layer: Wordfence plugin
. Database Layer: MySQL

### Features
User Registration & Login
Product Catalog
Shopping Cart
Secure Checkout
Payment Integration
Order Management

## Contributing

Contributions are welcome. Fork the repository and submit a pull request.

## License

This project is for educational purposes.

## Author

**Jeshnavi Dakamarri**
