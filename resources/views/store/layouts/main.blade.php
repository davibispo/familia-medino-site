<html>
    <head>
        <title>Família Medino</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!--Fonts Icons-->
        <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">

        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">

        <!--Fonts Icons-->
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/reset.css')}}">

        <!--Favicon-->
        <link rel="icon" type="image/png" href="{{url('assets/imgs/favicon.png')}}">

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>

        @include('store.layouts.header')

        <div class="container">
            @yield('content')
        </div>

        <footer class='container-fluid text-center'>
            <br>
            <p>Se interessou por um de nossos serviços ou produtos? <a href="{{ route('contatos.create') }}">Clique aqui</a></p>
			<div>
				<br>
				<p>Ladeira Dr. Geraldo Melo dos Santos, 161 - Farol, Maceió/AL | Fone: (82) 98844-3706 | contato@familiamedino.com.br</p>
				<p>Copyright &#174 2017-{{date('Y')}} | Todos os direitos reservados</p>
				<i><font size='2'>Desenvolvido por Davi Bispo | (82) 99969-3407</font></i>
			</div>
		</footer>

        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!--Bootstrap-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!--alertas-->
        @if (session('alertSuccess'))
            <div class="alert alert-success text-center">
                {{ session('alertSuccess') }}
            </div>
        @elseif(session('alertDanger'))
            <div class="alert alert-danger text-center">
                {{ session('alertDanger') }}
            </div>
        @endif
    <!--fim do alerta-->

       @stack('scripts')
    </body>
</html>
