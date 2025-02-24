<div class="buscador">
	<input type="email" id="fname" name="fname" placeholder="Buscar...">
	<button type="submit"><img src="../assets/icons/buscar_oferta.svg" alt="" /></button>
</div>

<style>
	.buscador {
  		display: flex;
  		justify-content: center;
  		margin-top: 8px;
  		width: 25%;
  		height: 32px;
	}

	.buscador input {
  		width: 85%;
  		border-radius: 4px 0 0 4px;
  		border: 1px solid var(--color-scroll-bar);
  		box-sizing: border-box;
  		background-color: var(--color-elements-form);
  		font-family: 'Raleway-Regular', 'Raleway', sans-serif;
  		color: var(--color-scroll-bar);
  		text-align: left;
  		line-height: normal; 
  		font-size: 12px;
  		padding-left: 4px;
	}

	.buscador button {
  		width: 15%;
  		border-radius: 0 4px 4px 0;
  		border: 1px solid var(--color-scroll-bar);
  		box-sizing: border-box;
  		background-color: var(--color-scroll-bar);
	}
</style>