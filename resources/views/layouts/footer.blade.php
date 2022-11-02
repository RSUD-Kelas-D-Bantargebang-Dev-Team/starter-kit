        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>{{ date('Y') }} &copy;
                        <a href="#" target="_blank">PT. Lapan Techology Indonesia</a>
                    </p>
                </div>
                <div class="float-end">
                    <p>
                        <a href="#" target="_blank">RSUD Bantargebang</a>
                    </p>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('assets') }}/js/bootstrap.js"></script>
    <script src="{{ asset('assets') }}/js/app.js"></script>
    @stack('js')
</body>

</html>
