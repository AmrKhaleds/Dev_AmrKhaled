        <!-- Footer Start -->
        <footer class="footer mt-auto">
            <div class="container-fluid footer-main">
                <div class="p-copyright"><p class="copyright">© AmrKhaled <?php echo date('Y'); ?>.</p></div>
                <div class="social-links">
                    <a id="links" data-template="facebook" href="https://www.facebook.com/3k.eissa/" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a id="links" data-template="twitter" href="https://twitter.com/3kEissa" target="_blank"><i class="bi bi-twitter"></i></a>
                    <a id="links" data-template="mail" href="mailto:dev.amrkhaled@devamr.xyz" target="_blank"><i class="bi bi-envelope"></i></a>
                    <a id="links" data-template="linkedin" href="https://www.linkedin.com/in/amr-khaled-468a151ab/" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a id="links" data-template="gihub" href="https://github.com/amrkhaleds" target="_blank"><i class="bi bi-github"></i></a>
                    <a id="links" data-template="resume" href="./cv/AmrKhaled_Junior+Back+End+Developer_Resume.pdf" target="_blank"><i class="bi bi-file-earmark-person-fill"></i></a>
                </div>
                <div style="display: none;">
                    <div id="facebook">
                        <strong>Facebook</strong>
                    </div>
                    <div id="twitter">
                        <strong>Twitter</strong>
                    </div>
                    <div id="mail">
                        <strong>Gmail</strong>
                    </div>
                    <div id="linkedin">
                        <strong>Linkedin</strong>
                    </div>
                    <div id="gihub">
                        <strong>Github</strong>
                    </div>
                    <div id="resume">
                        <strong>Download Resume</strong>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Footer End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js" integrity="sha512-nhY06wKras39lb9lRO76J4397CH1XpRSLfLJSftTeo3+q2vP7PaebILH9TqH+GRpnOhfAGjuYMVmVTOZJ+682w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js" integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1613706377/magicmouse/magic_mouse-1.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="./js/scrolloverflow.min.js"></script>
        <!-- Production -->
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/tippy.js@6"></script>

        <script src="./particles.js/particles.js"></script>
        <script src="./particles.js/app.js"></script>
        <!-- stats.js -->
        <script src="./particles.js/lib/stats.js"></script>
        
        <script src="./js/main.js"></script>
        <script>
            tippy('#links', {
                content(reference) {
                    const id = reference.getAttribute('data-template');
                    const template = document.getElementById(id);
                    return template.innerHTML;
                },
                allowHTML: true,
                });
        </script>
        <script>
            var count_particles, stats, update;
            stats = new Stats;
            stats.setMode(0);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);
            count_particles = document.querySelector('.js-count-particles');
            update = function() {
                stats.begin();
                stats.end();
                if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
                }
                requestAnimationFrame(update);
            };
            requestAnimationFrame(update);
            </script>

    </body>
</html>