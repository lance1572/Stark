  <footer class="footer" role="contentinfo">
    <div class="">

      <p class="footer__copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

      <p class="">
        <a href="">Made with <b class="heart">♥</b> in Baltimore</a>
      </p>
    
    </div>
  </footer>

</body>
</html>