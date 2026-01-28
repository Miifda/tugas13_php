</main>
</div>

<footer class="text-center text-muted py-4">
    <div class="container">
        <p class="mb-1">
            <strong>🏥 RS-VIP Hospital</strong> • Smart Hospital Management System
        </p>
        <p class="mb-1 small">
            <i class="bi bi-shield-check"></i> Secure & Encrypted • 
            <i class="bi bi-lightning"></i> Fast & Reliable • 
            <i class="bi bi-cloud"></i> Cloud-Based
        </p>
        <p class="mb-0 small">
            © 2026 RS-VIP. All rights reserved. • Powered by PHP MVC Framework
        </p>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Scripts -->
<script>
// Auto-hide alerts after 5 seconds
document.addEventListener('DOMContentLoaded', function() {
    const alerts = document.querySelectorAll('.alert-dismissible');
    alerts.forEach(alert => {
        setTimeout(() => {
            const bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }, 5000);
    });
});
</script>

</body>
</html>