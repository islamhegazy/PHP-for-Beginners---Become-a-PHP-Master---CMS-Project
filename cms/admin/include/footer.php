

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        if(document.URL.indexOf("edit") >= 0){ 
            $('#myModal').modal('show');
        }

        $('#model_close').on('click',function(){

            window.location.href = "categories.php";
            });

</script>
</body>

</html>