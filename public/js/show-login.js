document.addEventListener('DOMContentLoaded', function () {
    const btnLogin = document.getElementById('admin-login');
    if (!btnLogin) return;

    const inputUser = document.getElementById('admin-user');
    const inputPass = document.getElementById('admin-pass');
    const messageDiv = document.querySelector('.login-message');

    btnLogin.addEventListener('click', async function (e) {
        e.preventDefault();

        const user = inputUser.value.trim();
        const pass = inputPass.value.trim();

        // Limpia mensaje anterior
        messageDiv.textContent = '';
        messageDiv.style.color = '';

        if (!user || !pass) {
            messageDiv.textContent = 'Por favor ingresa usuario y contraseña.';
            messageDiv.style.color = 'red';
            return;
        }

        // Desactivar botón temporalmente
        btnLogin.disabled = true;

        try {
            const response = await fetch('{{ route("admin.mini.login") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ user, pass })
            });

            const result = await response.json();

            if (response.ok && result.success) {
                messageDiv.textContent = result.message;
                messageDiv.style.color = 'green';
                setTimeout(() => location.reload(), 1000);
            } else {
                messageDiv.textContent = result.message || 'Credenciales inválidas.';
                messageDiv.style.color = 'red';
            }

        } catch (err) {
            messageDiv.textContent = 'Error inesperado en el login.';
            messageDiv.style.color = 'red';
            console.error('Login error:', err);
        } finally {
            btnLogin.disabled = false;
        }
    });
});