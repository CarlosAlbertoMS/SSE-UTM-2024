<div class="main-form--1">
	<input type="email" id="fname" name="fname" value="Buscar...">
	<button type="submit"><img src="../assets/icons/buscar_oferta.svg" alt="" /></button>
</div>
<div class="main-line"></div>

<style>
	.main-form--1 {
  		position: absolute;
  		display: flex;
  		justify-content: center;
  		margin-top: 8px;
  		width: 1024px;
  		height: 30px;
	}

	.main-line {
  		position: absolute;
  		display: flex;
  		width: 986px;
  		height: 19px;
  		margin-top: 38px;
  		border-bottom: 1px solid var(--color-line);
	}

	.main-form--1 input {
  		width: 200px;
  		height: 30px;
  		border-radius: 4px 0 0 4px;
  		border: 1px solid var(--color-scroll-bar);
  		box-sizing: border-box;
  		background-color: var(--color-elements-form);
  		font-family: 'Raleway-Regular', 'Raleway', sans-serif;;
  		color: var(--color-scroll-bar);
  		text-align: left;
  		line-height: normal; 
  		font-size: 12px;
  		padding-left: 4px;
	}

	.main-form--1 button {
  		width: 32px;
  		height: 30px;
  		border-radius: 0 4px 4px 0;
  		border: 1px solid var(--color-scroll-bar);
  		box-sizing: border-box;
  		background-color: var(--color-scroll-bar);
	}
</style>