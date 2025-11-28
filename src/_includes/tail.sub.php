			<?if($docs){?>
          </div>
        </div>
      </div>
      <?}else{?>
      </div>
      <?}?>
		</section>

		<!-- s:footer -->
		{% include "components/footer.njk" %}
		<!-- e:footer -->
	</div>
<?if($_hijs){?>
<script>hljs.highlightAll();</script>
<?}?>
</body>

</html>
