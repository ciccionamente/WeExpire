<a href="https://weexpire.org">
<picture>
  <source media="(prefers-color-scheme: dark)" srcset="https://weexpire.org/img/logo_white.png">
  <source media="(prefers-color-scheme: light)" srcset="https://weexpire.org/img/logo.png">
  <img alt="WeExpire" src="https://weexpire.org/img/logo.png" width="200px">
</picture>
</a>

[WeExpire.org](https://weexpire.org) is the first opensource tool for creating emergency notes that can be read by your trusted contacts only after your death or if you are seriously injured.

## Running the project locally
 1. Clone the repo
    ```sh
    git clone https://github.com/ciccionamente/WeExpire.git
    ```
 2. Create a MySQL database with `utf8mb4_unicode_ci` collation, name it `we_expire` and import the `we_expire.example.sql` configuration file into it
 3. Copy the `configuration.example.php` file into `underwear/environment_variables` and rename it as `configuration.php`
 4. Provide your own environment variables in the `configuration.php` file
 5. Set the `htdocs` folder as the main root directory for your server configuration
 6. Run the project!

## Apache Configuration (.htaccess)
If you are using Apache (locally or in production), include the following `.htaccess` file inside the `htdocs` folder to enable correct routing for all pages:

```apache
RewriteEngine On
RewriteBase /

# Remove trailing slash from non-existing files/directories
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.+)/$ /$1 [R=301,L]

# Redirect .php URLs to clean URLs (e.g., /start.php → /start)
RewriteCond %{THE_REQUEST} ^[A-Z]{3,}\s([^.]+)\.php[?\s] [NC]
RewriteRule ^([^.]+)\.php$ /$1 [R=301,L]

# Internally rewrite clean URLs to corresponding .php files if they exist
RewriteCond %{REQUEST_FILENAME}.php -f
RewriteRule ^([a-zA-Z0-9/_-]+)$ $1.php [L]

# Redirect /index to root (/)
RewriteCond %{THE_REQUEST} /index\.php [NC]
RewriteRule ^index\.php$ / [R=301,L]

# Handle language-prefixed paths (e.g., /it/start → /start.php?l=it)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{DOCUMENT_ROOT}/$2.php -f
RewriteRule ^(en|es|fr|it)/(.+)$ /$2.php?l=$1 [NC,L]

# Language redirect for root-level language paths (e.g., /en → /?l=en)
RewriteRule ^(en|es|fr|it)/?$ /?l=$1 [NC,L]
```

## Running the project with Docker
1. Clone the repo
   ```sh
   git clone https://github.com/ciccionamente/WeExpire.git
   ```
2. Modify the `docker-compose.yml` file's environment variables for the `we_expire` container/service
3. Run `docker-compose up -d`

## Contribute
Contributions that are not time-consuming and made for improving WeExpire's security, efficiency or accessibility are **greatly appreciated**.

1.  Fork the project
2.  Create your feature branch
3.  Make your changes
4.  Commit your changes
5.  Push to the branch
6.  Open a pull request

## License
Distributed under the GPLv3 License. See `LICENSE` for more information.

## Credits
A special thanks goes to the following people who have contributed to this project:
- [Rebeca Dieguez Merayo](https://www.linkedin.com/in/rebecadieguez/), Spanish content
- [Hugo Blanc](https://github.com/eze-kiel), French content
- [Robert Thomas](https://github.com/wolveix), Docker support + SQL schema simplification

Another special thanks goes to these opensource third-party libraries and frameworks that have been used in this project:
 - [PHPMailer](https://github.com/PHPMailer/PHPMailer)
 - [TCPDF](https://github.com/tecnickcom/TCPDF)
 - [Bootstrap](https://getbootstrap.com)

## Donate
If you want to contribute with a simple donation, you can do it via **[Buy Me a Coffee](https://www.buymeacoffee.com/ciccionamente)**.
