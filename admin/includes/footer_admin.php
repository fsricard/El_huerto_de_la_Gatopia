        <script>
            // Script para activar el botón del menú responsive
            function toggleMenu() {
                document.getElementById('sidebar').classList.toggle('active');
            }

            // Script para cerrar el menú responsive haciendo clic fuera de el
            document.querySelectorAll('.sidebar a').forEach(link => {
                link.addEventListener('click', () => {
                    document.getElementById('sidebar').classList.remove('active');
                });
            });

            // Script para gestionar la vista previa del menú principal del header
            document.querySelectorAll('.tabla-admin form').forEach(form => {
                form.addEventListener('input', () => {
                    const texto = form.querySelector('[name="texto"]').value;
                    const url = form.querySelector('[name="url"]').value;
                    const target = form.querySelector('[name="target_blank"]').checked;

                    const li = form.closest('tr').querySelector('.preview-li');
                    if (li) {
                        const a = li.querySelector('a');
                        a.textContent = texto;
                        a.href = url;
                        if (target) {
                            a.setAttribute('target', '_blank');
                        } else {
                            a.removeAttribute('target');
                        }
                    }
                });
            });
        </script>
    </body>
</html>