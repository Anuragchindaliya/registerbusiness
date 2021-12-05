<script>
    $(document).ready(function() {
        $("select").selectize({
            sortField: "text",
        });
        setTimeout(() => {
            $("#infomsg").slideUp()
        }, 4000);
    });
</script>
<script src="./slug.js"></script>
</body>

</html>