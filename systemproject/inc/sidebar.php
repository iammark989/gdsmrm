
	<!-- sidebar -->
	<aside id="sidebar">
		<div class="sidebar">
			<div class="sidebar-logo">
			<a href="#">LOGO</a>
			</div>
	<!-- sidebar navigation -->
			<ul class="sidebar-nav p-0">
		<!--<li class="sidebar-header"> Content </li> -->
			<!-- ADMINSITRATION -->
				<li class="sidebar-item">
					<a id="adminbtn" href="#" class="sidebar-link collapsed has-dropdown iactivebtn" data-bs-toggle="collapse" data-bs-target="#Administration" aria-expanded="true" aria-controls="Administration">	
						<i class="lni lni-user-4"></i><span>Administration</span>
					</a>
					<ul id="Administration" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="sidebar">
						<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col">Setup</a></li>
						<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col">System Inistialization</a></li>
					</ul>
				</li>

			<!-- SALES A/R -->
				<li class="sidebar-item">
					<a id="salesarbtn" href="#" class="sidebar-link collapsed has-dropdown iactivebtn" data-bs-toggle="collapse" data-bs-target="#SalesAR" aria-expanded="true" aria-control="SalesAR">
						<i class="lni lni-agenda"></i><span> Sales - A/R </span>
					</a>
						<ul id="SalesAR" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="sidebar">
							<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> Sales Quotation </a></li>
							<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> Sales Order </a></li> 
							<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> Return </a></li>
							<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> A/R Invoice </a></li>
							<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> A/R Credit Memo </a></li>
						</ul>
				</li>
			
			<!-- PURCHASING A/P -->
				<li class="sidebar-item">
					<a id="purchabtn" href="#" class="sidebar-link collapsed has-dropdown iactivebtn" data-bs-toggle="collapse" data-bs-target="#PurchasingAP" aria-expanded="true" aria-control="PurchaseAP"> 
						<i class="lni lni-cart-1"></i>	<span> Purchasing - A/P </span>
					</a>
					<ul id="PurchasingAP" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="sidebar">
						<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> Purchase Order </a></li>
						<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> Goods Receipt P.O. </a></li>
						<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> Goods Return </a></li>
						<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> A/P Credit Memo </a></li>
						<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> A/P Invoice </a></li>
					</ul>
				</li>

			<!-- INVENTORY -->
				<li class="sidebar-item">
					<a id="inventorybtn" href="#" class="sidebar-link collapsed has-dropdown iactivebtn" data-bs-toggle="collapse" data-bs-target="#inventory" aria-expanded="true" aria-control="inventory"> 
							<i class="lni lni-cart-1"></i>	<span> Inventory </span>
					</a>
					<ul id="inventory" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="sidebar">
							<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> Item Master Data </a></li>
							<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> Inventory Transactions </a></li>
							<li class="sidebar-item"><a href="#" class="sidebar-link-in sidebar-link-col"> Item Management </a></li>
					</ul>
				</li>

				

			</ul>
		
	

</div>
				
		<div class="sidebar-footer">
					<a href="#" class="sidebar-link"><span>Logout</span></a>
				</div>		

</aside>

<script>
      const button1 = document.getElementById('adminbtn');

        button1.addEventListener('click', () => {
            const isActive = button1.classList.contains('activebtn');

            if (isActive) {
                button1.classList.remove('activebtn');
                button1.classList.add('inactivebtn');
            } else {
                button1.classList.remove('inactivebtn');
                button1.classList.add('activebtn');

            }
        });

		const button2 = document.getElementById('salesarbtn');

        button2.addEventListener('click', () => {
            const isActive = button2.classList.contains('activebtn');

            if (isActive) {
                button2.classList.remove('activebtn');
                button2.classList.add('inactivebtn');
            } else {
                button2.classList.remove('inactivebtn');
                button2.classList.add('activebtn');

            }
        });

		const button3 = document.getElementById('purchabtn');

		button3.addEventListener('click', () => {
            const isActive = button3.classList.contains('activebtn');

            if (isActive) {
                button3.classList.remove('activebtn');
                button3.classList.add('inactivebtn');
            } else {
                button3.classList.remove('inactivebtn');
                button3.classList.add('activebtn');

            }
        });

</script>
