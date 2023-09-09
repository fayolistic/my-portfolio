# 🍔 Parallax Dining - A Restaurant Website
Welcome to Parallax Dining, where web development meets culinary delight! This project was crafted during my second year of graduation.
It's completely responsive, ensuring it looks fantastic on both mobile and desktop screens.

![image](https://github.com/ayushichoudhary-19/parallaxdining.github.io/assets/73214455/a44d3687-c7d6-414a-a062-0cfdc91bff75)

# 🎯 Objective 
The purpose of this project/website is to provide a restaurant a platform to let their business grow online and to build a professional image. It also helps the customers to get a clear idea of the overall atmosphere of the restaurant, before even stepping a foot inside, by navigating through different pages. The web pages provide simple, well-defined navigation with a clear user experience and quality product visuals and descriptions. The project includes 6 web pages that look and work faultlessly on every phone, tablet, desktop, and internet browser.

# 👀 Demo 
Have a look: https://ayushichoudhary-19.github.io/parallaxdining.github.io/

# 📦 Languages and Tools

<p align="center">
  <img src="https://img.icons8.com/color/96/000000/html-5.png" alt="HTML" style="margin: 10px;">
  <img src="https://img.icons8.com/color/96/000000/css3.png" alt="CSS" style="margin: 10px;">
  <img src="https://img.icons8.com/color/96/000000/javascript.png" alt="JavaScript (JS)" style="margin: 10px;">
  <img src="https://img.icons8.com/color/96/000000/php.png" alt="Firebase" style="margin: 10px;">
  <img src="https://img.icons8.com/color/96/000000/postgreesql.png" alt="PostgreSQL" style="margin: 10px;">
  <img src="https://img.icons8.com/color/96/000000/visual-studio-code-2019.png" alt="VS Code" style="margin: 10px;">
</p>

# ⚙️ Instructions

### Note: The PHP and MySQL code lines in the repository are commented out. Please uncomment them before proceeding with the following steps.

<br> 

To use this project, follow these steps:

1. **Download the Project Files**:
   - Click the "Download" button on the project's GitHub repository to download a ZIP file containing all the project files.
   - Extract the contents of the ZIP file to a location of your choice on your computer.

2. **Ensure PHP Installation**:
   - Before proceeding, make sure you have PHP installed on your system. If not, you can download and install PHP from the official [PHP website](https://www.php.net/downloads.php).
   - ![image](https://github.com/ayushichoudhary-19/parallaxdining.github.io/assets/73214455/2464cc93-d6e3-4cec-b4d1-206603e836da)

3. **Set Up a Web Server (e.g., Apache)**:

   If you don't have a web server installed, you can set up one like Apache. Follow these steps:

   - **Download Apache**:
     - Visit the [Apache HTTP Server Project](https://httpd.apache.org/download.cgi) website.
     - Choose the appropriate version of Apache for your operating system. For Windows, you may find pre-built binary versions, while for Linux and macOS, you may use package managers to install Apache.
     - Download the installer or package for your system.

   - **Install Apache**:
     - Run the installer or package manager as an administrator (on Windows) or with superuser privileges (on Linux/macOS).
     - Follow the on-screen instructions to install Apache. You may be prompted to choose installation directories and configure Apache settings during the installation process.

   - **Start Apache**:
     - After the installation is complete, Apache may start automatically. If it doesn't, you can start it manually using terminal or command prompt.
       - On Windows, you can use the command:
         ```
         httpd -k start
         ```
       - On Linux or macOS, use the appropriate command based on your system's init system (systemd or others).
     - You can check the status of Apache to ensure it's running:
       ```
       httpd -k status
       ```

   - **Verify Installation**:
     - Open a web browser and enter `http://localhost` or `http://127.0.0.1` in the address bar. If you see the default Apache welcome page, it indicates that Apache is successfully installed and running.

   Now you have Apache installed and ready to use as your web server.

4. **Configure Web Server for PHP**:
   - Configure your web server to run PHP scripts. This typically involves modifying the server's configuration file to enable PHP processing.
   - For Apache, you can enable PHP by adding the following line to your Apache configuration (httpd.conf) or a virtual host configuration:
     ```
     AddType application/x-httpd-php .php
     ```
   - Restart the Apache server to apply the changes.

5. **Place Project Files in Document Root**:
   - Copy all the project files and folders to the document root of your web server. The document root is the directory where your web server serves files from.

6. **Start the Web Server**:
   - Start your web server. If you're using Apache, you can typically start it using a command like `sudo apachectl start` (on macOS/Linux) or by starting the Apache service in Windows.

7. **Access the Project**:
   - Open a web browser and enter the URL where your web server is running. For example, if you're running Apache locally, you can access the project by entering `http://localhost` in your web browser's address bar.
   - Navigate to the project's main page to start using it.

Now you're ready to explore and use the Parallax Dining website locally on your web server.


# 🛠️ Scope of improvement 
Note: The Order Online page needs updation. As of now, it looks well only on a desktop screen.

# 📄 MIT License
This project is licensed under the MIT License. Please refer to the [LICENSE](LICENSE) file for details.
