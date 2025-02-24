
        function toggleForm() {
            let loginContainer = document.getElementById('login-container');
            let registerContainer = document.getElementById('register-container');
            
            if (loginContainer.style.display === 'none') {
                loginContainer.style.display = 'block';
                registerContainer.style.display = 'none';
            } else {
                loginContainer.style.display = 'none';
                registerContainer.style.display = 'block';
            }
        }
        function handleLogin(event) {
            event.preventDefault();
            window.location.href = 'index.html'; // Redirect to home page after login
        }