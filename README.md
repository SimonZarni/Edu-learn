"# Edu-learn" 

# Clone the repository 
git clone https://github.com/SimonZarni/Edu-learn.git

# Navigate to project folder
cd edu-learn

# Install dependencies
composer install 

# Setup environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Migrate database
php artisan migrate

# Link storage directory for file upload
php artisan storage:link

# Run the project
php artisan serve

# Navigate to project home page
localhost:8000

# Login/Register
# Login as admin to go to admin route
# Login as student to go to website route

# Manual change of role of student into admin in database
