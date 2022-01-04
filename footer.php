<div class="stripe stripe__footer bg-color-peach">
	<!-- BEGIN footer -->
	<footer class="flex-layout flex-layout--nowrap bg-color-orange">
		<?php
		$post_id = 326;
		$footer = get_post( $post_id );
		$col1 = get_post_meta($post_id, 'about_jetro', true );
        $col3 = get_post_meta($post_id, 'contact_us', true );
		?>
		<!-- BEGIN footer__col -->
		<div class="footer__col">
			<h2 class="footer__title maintitle maintitle--white">ABOUT JETRO</h2>
			<?php echo $col1?>
		</div>
		<!-- END footer__col -->

		<!-- BEGIN footer__col -->
		<div class="footer__col">
			<h2 class="footer__title maintitle maintitle--white">TWITTER WIDGET</h2>
			<?php echo do_shortcode('[custom-twitter-feeds]');?>
		</div>
		<!-- END footer__col -->

		<!-- BEGIN footer__col -->
		<div class="footer__col">
			<h2 class="footer__title maintitle maintitle--white">CONTACT US</h2>
			<?php echo $col3?>
			<!-- BEGIN footer__svgblock -->
			<div class="flex-layout flex-layout--nowrap footer__svg">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10.583mm"
					height="10.936mm">
					<image x="0px" y="0px" width="30px" height="31px"
						xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAfCAMAAADHso01AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACClBMVEWOtPMzU5MzU5MzUpIzU5IyUpEvTIYFBgYsR30xUI4FBgYFBgYFBgYFBgYzU5NJa6t7n9+OtPN+pel3ovBxne9ynu9vnO9um+5tmu5sme1rmO1ql+1sme5plu1ej+1Mg+s+eek4dOk6delAe+lOhethk+1rmO5ql+5ike1JgOs3cOmDpPK3yfjG1fqfufWWtfRJgetpl+5olu5hke1Beulpke/m7f3z9//O2/s5delmlO1nle1lk+xNgepZhOyxxfc6c+hkkuxllO1gkOw0bujJ1vqVsfRFfOpjkuxjku1ai+wxZuipvfVAbelBb+lHeOtJfepViOthkOxgj+xUheo6audAa+c/cedPgelThepZietejexfj+xejuxRguo9a+g8aehOgepdjetdjexcjOxbi+tLfOk7aedKfOlXh+paiutbi+xbjOtXiepGeuguZOUdUuI5Y+QcUeEjWeQmXOQzauZMgOlai+tQgepJderb5Pw2audYh+pYietXiOtLfek7aei7y/guY+ZVhupWh+tVhutJe+k7aOiZr/M0Z+ZThOpHcuh5mO9QgelBc+cqXuQbTeE3X+MaTOAhVOMoW+Q5bOZMfulShOpRg+pQgulOgOlBc+Y5Y+VNfuhPgOlFd+c6ZeZCabhBaLc3XrGtxfWsxPWfvfSgvPOfu/OQs/KXtvFZe8CYtvH////nbVNjAAAADnRSTlMAYMl/6OeIDJXvAxkfICmJa7gAAAABYktHRK0gYsIdAAAAB3RJTUUH5QwQFB4LRwh39AAAAZNJREFUKM+F01VbAkEYhuExwcLWtRs7sFAxMbEDC7sVsTuwwMJuFLvrR/qNq+vg5V4+R/POPaeDkIEhjyVDA4SMrG1sWbKxNkLGdvYOLNnbGSOeoxNrjjzEc/4d5eLq5ubqQsERmNLP3cPTy9vH188/wJ2igPl6BQYFh4SGhYdHREZ58PnAArLomNi4eCEuITFJIAAWkSWnpArp0tIzRCJgMVlmVvYX5+TmicXAErL8AkyFRcUlpWVBEglwOVGFtBJzVXVNrawONnA9UUNjE+bmltaGzw3cxtTeIevswtzV3SOT98INsIKpr39gcAjz0PDI6Nj4hEIBLGeanBL+ND0zK5cDK7+bm18geHFJpVQCq79bXlkleG1do1YDq5g6NwjerNaoVMBSpq3tnd09THv7B4dHxxqpFPiESXt6pjvHfK67uDzVwo0ew4Ora8zXV1p6/883RLd3NN/d0hv4nujhkebHB3oDPxE9v9D88kzvf9nklZ1fTZDp2zsbv7+ZIg7XjO0LmnE5yJxjYWn1Z5YWHPMPJtgf0D+KGLsAAAAASUVORK5CYII=" />
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10.583mm"
					height="10.936mm">
					<image x="0px" y="0px" width="30px" height="31px"
						xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAfCAMAAADHso01AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACslBMVEUlhJ2s6/8lhJ0lhJ0lg5wlhJwlg5sieI8FBgYgcYYkgJgFBgYFBgYFBgYFBgYlhJ1GnbWP1eqs6/+Z3/aZ5P+U4/+V5P+T4/+S4/+R4/+Q4v+P4v+O4v+O4f+I3/931/9o0P941/+M4f+L4P+K4f+E3v9lz/9zzv/I6//C6P+V2/962f+N4f+C3P921v9izf9v0/+A3P+J3/+H3/+L1P/////c8f9Zwf9Uxv972f+K4P+L4f952P+h3//w+v96zv9Owv9kzv+G3/+J4P932P9Kvf/8/v/+///9/v/J6/9Nwv992v9UxP/3/P/0+/+n3f9HvP9gzP9/2/9Xx//T7v/j9P9Owf972v+I4P+C3v9iz/9At//e8v/6/f+u4P9Kvv9byv9Ku/+l3f9fzP+B3f+F3/+D3v9l0P/E6P/z+v88sf+l2v/2+/8zsf9ayf9p0v982/9u1P9qyP/7/f+04f+t4P+15f9v1f9byf89sv/A5P+24v9Fuv9r0v+B3v9+3f9q0v+W1//t+P+r4f9q0/9/3f+A3f9z1v9Pw//T7f9rw/9Nvv9dyv912P963P9r1P9Cvf9bvf/w+f89uv9t1f952v983P962v962/993P9hzv+Y1v96yv9cy/942f9l0f9v1v922f9z2P8vrv9hu//Z7/9Evf9x1/972/9v1P+U2/+U1/8+uP9Gvf9Auf83r/+Pz//1+//t9/86s/9m0P942v9WyP/f8v+/5f/h8v/4/P/U7f85s/912f942/952/932v9s1P9PxP9jwv+Fzv9Bu/9w1v9dy/89tv+CzP/i8//k9P+P0f87tf9Vx/9t1P922v9Yyv9FvP9Itv+Ay/+t3f/I6P+74/+l2f9Etf9EvP9Wyf9n0v9by/9Jwf9Kwf9Rxf9o0/902f9w0vU+nblx0/Yje4pTAAAAD3RSTlMAAGDJf+jniAyV7wMZHyCkxsZbAAAAAWJLR0Q13rbZawAAAAd0SU1FB+UMEBQeHbPcwqUAAAIbSURBVCjPY2BgYubHAZiZGBlYBASFcABBARYGVmERURxARJiVgV9MHCcQ42fgl0AFklLSMtKSUA5QWgoFyMrJKygoyklDeEBpaWlpJWUVJRlpEJBVVVPX0NTShnKB0jo6Srp6+gaGRspAlrGCiampmbmFpZWSDhAApZWUrG1s7ewdHC2drJxdXN1M3T3cPL1cnJWAAChtZeXs7eNr6ucfEGgTFBxiCgahYeFyVlZWQOmIiIjIqOgYU9PYuPiERA+ItGlSckqqcQRQ2snJKS09ww0klpmVDZU1zcnNyy9IBUqnpqamFRaBpU2L3WDSpiWlZeVpQOm0tLTI8IrKKlNU4F5dU5sClK4DgvqGxmJ06abmllagdBsQtLZ3dGZ6oMh2dff0gqTrQaCvf8JEFP2TJk+ZOq0eKD196oyCmdOmzpqNIj1n7tSZM2cCpec1zF+wcOGiWYuXIJm+dNnyFdOmTQNKr1y1es2ytevWb9iIkN20ecvWFUAAlF6wLS5z+46du5BM3r0nau++/UAAlD5w8NDhTGRrNx45mg6RBUnvP3Ds+ImTp2CSp8+cPXf+AkQWLL1/696DFy9dvnL12vUbJ2/eut2yd+v+/UjSQAULl9+5e+je/Qd3Hy7fe2D/fjTp/fv3bb2w99HevRe27kcGcGnsgJ+B7TFu2cdsDOxPnuKSffqEnYGDkwtXFuTi5GDg5uDh5cMKeHk4uAFVCD4L4zPAPwAAAABJRU5ErkJggg==" />
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10.583mm"
					height="10.936mm">
					<image x="0px" y="0px" width="30px" height="31px"
						xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAfCAMAAADHso01AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABIFBMVEUAAACJiYmJiYmIiIiIiIiHh4d9fX0FBgZ1dXWEhIQFBgYFBgYFBgYFBgaJiYm3t7fx8fH19fX6+vr29vb9/f35+fnm5ub39/f4+Pjg4ODDw8Pw8PDq6urJycm8vLzl5eW7u7vz8/Pd3d3Nzc25ubnV1dX09PTy8vLU1NTr6+vR0dHGxsbv7+/FxcXh4eHi4uK/v7/p6ent7e3s7Ozo6Oi6urrAwMDk5OXX19e0tLTu7u6zs7PExMTn5+fZ2dnHx8exsbHS0tLOzs7IyMjc3Nyqqqq9vb24uLirq6vLy8uztLS5urq4ubn09fXa2tq3uLi0tbXQ0NDCwsK2trbe3t7T09PKysrj4+PW1tbMzMzf39/k5OTq6+vu7+/7+/v///+K0AwYAAAADnRSTlMAYMl/6OeIDJXvAxkfICmJa7gAAAABYktHRF9z0VEtAAAAB3RJTUUH5QwQFB4zbwrPagAAAX5JREFUKM+102lPwjAYwPGqKHhBYY4xyoBOpNuY4NqpON0G3veJoqB8/49hi8Z4bMY3/l41zz9d1jQFYGIyHWNyAoCpDMzGgJkpkMhJcVnKJUB6SY61lP7nnFfkQiRZyfOsFpESCRVVnktauRJxNqlS1Uo8Y325tlLH5AtcN2rLOuZZMVWr3IDI/gSh1bLVNBWeC8hsGWs1h7IP1F3fMFomKohMINtsF7dUz3zn6ds77U0GyThjTDw/CDtdNP4ARbvbe4HvEYzfdhMCPXdfOzjkC0jg0fGJ7niQj0VWIIdoMzw9O9eli8ur6nXYpEhMxa9JiKOqZug3t3edTqZo9QxNpWIqiWzbnn//4Dr93qP19GS1e33Hfbj3Pdt+y2wQBrTkuP6wxQ191ynRIBywcc7mu+HzC/vm5Tns5rM8s0aAIfoB4qDBxI2xOolUZ+LGRtlYI5GlWKM/7P41T8sExSDyNJipQsoiUVidAcnUbNwTnE0lwVxyfmEx0sJ8cu4Vk6NsjOeBYv0AAAAASUVORK5CYII=" />
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10.583mm"
					height="10.936mm">
					<image x="0px" y="0px" width="30px" height="31px"
						xlink:href="data:img/png;base64,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" />
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10.583mm"
					height="10.936mm">
					<image x="0px" y="0px" width="30px" height="31px"
						xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAfCAMAAADHso01AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACl1BMVEVU1fMAfaUAfaUAfKQAfaQAfKMAcpYFBgYBa40AeZ8FBgYFBgYFBgYFBgYAfaUVk7hCwuJU1fNEyes6yvAzx+81x+8yxu8xxu4wxe4qwO0Wr+kOqOcetuoswu0YsekHo+UBneQDnuQUregovuwuxO4ZsuoMoeWJ0vO14/dfwe4TrOgdtep9zfHZ8Pv9/v/0+/6V1vQGnuUpwO0tw+4UrOgtrOliwe4asuobs+oSoebE6PmDzvIVregrwu0ku+sRqedcvu30+v7N7PoHn+Qqwe0GmuPZ7/sGneMgtuoOpOWS0/P8/v8SneQnvuwYr+howe73/P4Bl+IowO0ov+0DluKm2/VFsuoctOqe1/SY1fPW7vsBluImv+wNouSb1fO14fczqefH6Pluwu4UquccsugKneMImuEhoeXK6fkGmuIlvuwasOgGlOIGl+INnuI5quiY0/MNoeUkvOshueoVmuN9x/AQo+Ujvewiu+sftukFluLE5vjQ6voFl+IVq+dcuOwYmuQcs+kivOsPoeN3w+75/f8SluEgueoHl+HH5vgLnOIhuuogu+sZr+gknORNr+kWrOcPouVctuvN6PkDjt8asugfuuseuOoDkODf8Pug1fMLmuMkm+Tr9v0zouUPoOQduesJmOKVzvKGx/AIleEbteocueoQpORQrui43/YDi94VrOYcuOobuOoXsecSj+D2+/7Z7foPjuAPoOMatukat+oZtukGkOCy2/Xt9/0nmeMLmeIZtOkPoeRTruktm+QYs+kYsugDiN7T6vrH5PgYkeEKluEZtuoMnOMkl+OAw+8Ji98Mm+IatuoKl+EBid4BiN4Hkd8SqOQYtOkVreYRpOQVq+YXsOgZtekXseMIjrkYsuT///9mrqSKAAAADnRSTlMAYMl/6OeIDJXvAxkfICmJa7gAAAABYktHRNwHYIO3AAAAB3RJTUUH5QwQFB8OLnmyOgAAAe9JREFUKM9jYGBk4sMBmBgZGJj5BQRxAAF+ZgYWIWERHEBYiIWBT1QMJxDlY+ATxwOA0hIQICklLQNhycrJKygqKYOYQGkVMFBVU9fQ1AKxtNV0dPX0DQyNgGygtDEImJjq6unpmZkbG1tYWumBgLUNUBgobWtra2fv4AgScnK2dXF1AsvqubkDJYDSLi4enl7eEODj6+cPZQYEuri4AKWDgkNCoULeYeGeEZFRYKZjdFBQEFA6JiY2Lj4hESyWlJySmpYOZmZkxsTEAKWzsrJzcvPywWIFhUXFKSVgZmlZVlYWULq8vEKmsrKqGiRWU1teXlcPNruhsby8HCjdBAIVzS0gwda29qaOThCrpasbKAyU7gGD3j6wkf0TJk4C0ZOnTAWJAqWngcH0GTNBwrNmz5kLMmXe/OkgUaD0AghYuAhs+mKQrPfiJUvBgkDpZRCwfIU3HKxctXoNWBAovRYC1q3fAJPduGnzFoggUHorBGzbvgMqu3PX7j1QQYT01r37ILIz9y85sBVT+uChwyDZI0ePHdyKRfr4iZMzvXeeOn3m4Fls0lsPnDu/68LFS5e3bsUqvfXAlavXrt/Yikt669azW1EBHwPrza04wU1WBrZbt3HJ3r7FxsDOwYkrC3JysDNwsXPz8GIFPNzsXABV5VeBYDzrvQAAAABJRU5ErkJggg==" />
				</svg>
			</div>
			<!-- END footer__svgblock -->
		</div>
		<!-- END footer__col -->
	</footer>
	<?php wp_footer(); ?>
	<!-- END footer -->
</div>
</body>
</html>