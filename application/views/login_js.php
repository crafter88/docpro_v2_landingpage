<script>
	$(window).scroll(function() {
      var height = $(window).scrollTop();
      if(height > 1)
      {
            $('#top-bar').removeClass('dark');
      	$('#top-bar').addClass('white');
      }else{
            $('#top-bar').removeClass('white');
      	$('#top-bar').addClass('dark');
      }

  });
</script>
<script>
      $(document).ready(function(){
            $('#top-bar').addClass('dark');
            $('#top-bar .navbar-nav li').removeClass('active');
            $('#top-bar .navbar-right li:nth-last-child(3)').addClass('active');
      });
</script>