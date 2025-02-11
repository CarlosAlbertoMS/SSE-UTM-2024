<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('Directorio-de-empresas.css') }}" />
    <title>Directorio de Empresas</title>
</head>

<body>
    <header>
        <div class="header--container--1">
            <div class="header--div0">
                <img src="{{ asset('assets/img/u43.png') }}" alt="" />
            </div>
            <div class="main--title">
                <p>Sistema de Seguimiento de Egresados y Bolsa de Trabajo</p>
            </div>
            <div class="header--div1">
                <img src="{{ asset('assets/img/utm_u31.png') }}" alt="" />
            </div>
        </div>
        <div class="header--container--2">
            <div class="header--option--1">
                <p>Ofertas Laborales</p>
            </div>
            <div class="header--option--2">
                <p>Directorio de Empresas</p>
            </div>
            <div class="header--option--3">
                <p>Tabulador de Salarios</p>
            </div>
            <div class="header--option--4">
                <p>Eventos</p>
            </div>
            <div class="header--option--3">
                <p>Historias de Éxito</p>
            </div>
            <div class="header--option--3">
                <p>Tips y Consejos</p>
            </div>
            <div class="header--option--5">
                <div class="header--icon--1">
                    <img src="{{ asset('assets/icons/Información_B.png') }}" alt="" />
                </div>
                <div class="header--icon--2">
                    <img src="{{ asset('assets/icons/Ajustes_B.png') }}" alt="" />
                </div>
                <div class="header--icon--2">
                    <img src="{{ asset('assets/img/u462.png') }}" alt="" />
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="main--section">
            <div class="main--container--1">
                <div class="main-form--1">
                    <div><input type="email" id="fname" name="fname" placeholder=" Buscar..."></div>
                    <button type="submit">
                        <img src="{{ asset('assets/icons/Buscar_B.png') }}" alt="" />
                    </button>
                </div>
                <div class="main-form--2">
                    <div class="main--label--number--offers">
                        <p> 24 Empresas</p>
                    </div>
                    <div class="main--order--info">
                        <p>Ordenar por</p>
                        <select name="Ordenar">
                            <option selected value="0"> Relevancia </option>
                            <option value="1"></option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="main--container--2">
                <div class="wrapper">
                    @foreach ($companies as $company)
                        <div class="wrapper--cell">
                            <div class="wrapper--cell--img">
                                <img src="{{ asset($company->image) }}" alt="">
                            </div>
                            <div class="wrapper--cell--body">
                                <div class="wrapper--cell--body--title">
                                    <p>{{ $company->name }}</p>
                                </div>
                                <div class="wrapper--cell--body--description">
                                    <p>{{ $company->description }}</p>
                                </div>
                                <div class="wrapper--cell--body--icon1">
                                    <img src="{{ asset('assets/icons/Usuario_B.png') }}" alt="">
                                    <div class="wrapper--cell--body-icon1--text">
                                        <p>{{ $company->contact_person }}</p>
                                    </div>
                                </div>
                                <div class="wrapper--cell--body--icon2">
                                    <img src="{{ asset('assets/icons/Telefono_B.png') }}" alt="">
                                    <div class="wrapper--cell--body--icon2--text">
                                        <p>{{ $company->phone }}</p>
                                    </div>
                                </div>
                                <div class="wrapper--cell--body--icon3">
                                    <img src="{{ asset('assets/icons/Correo_B.png') }}" alt="">
                                    <div class="wrapper--cell--body--icon3--text">
                                        <p>{{ $company->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</body>
</html>
