<footer id="pagefooter">
  <div class="row">
    <div class="span12">

    </div>
  </div>
</footer>
<footer id="pageclosure">
  <div class="row">
    <div class="span12">

      <footer role="contentinfo" class="muted pull-right">
        <?php print $theme->area('footer'); ?>
        <p>
          powered by <a href="http://www.habariproject.org/" rel="generator">Habari</a>
        </p>
      </footer>

    </div>
  </div>
</footer>

<?php print $theme->footer(); ?>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php print Site::get_url('theme'); ?>/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var $sidenav = $('.sidenav');
    if ($sidenav.length && $('#content h2, #content h3').size() > 1) {
      $('#sidebar_widgets').hide();
      var sectionCnt = 1;
      $('#content h2, #content h3').each(function() {
        $h = $(this);
        var text = $h.text();
        if (!text) {
          return;
        }
        var id = 'section' + sectionCnt++;
        $h.attr('id', id);
        var $li = $('<li><a href="#' + id + '"><i class="icon-chevron-left"></i> '+ text +'</li>');
        $sidenav.append($li);
      });

      $(".sidenav a").click(function(event){
        event.preventDefault();
        $('html,body').animate({
          scrollTop:$(this.hash).offset().top - 10
        }, 300);
      });

      $sidenav.affix({
        offset: {
          top: 300,
          bottom: 100
        }
      });

      $('[data-spy="scroll"]').each(function () {
        var $spy = $(this).scrollspy('refresh')
      });
    }
  });
</script>
</body>
</html>