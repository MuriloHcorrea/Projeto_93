<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">

    <div class="container-fluid">

        <a class="navbar-brand" href="#">Forever Home</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"

            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">



            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link">

                    Olá {{ Auth::user()->name }}

                    |

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="{{ route('cliente.index') }}">

                        <i class="bi bi-wallet2"></i>

                        Cliente

                    </a>

                </li>

                <li class="nav-item">

                    {{-- <a class="nav-link" href="{{ route('pet.index') }}">

                        <i class="bi bi-list-check"></i>

                        Pet's

                    </a> --}}

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="{{ route('logout') }}">

                        <i class="bi bi-box-arrow-right"></i>

                        Sair

                    </a>

                </li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/pet" class="nav-link" id="link">Pet</a>
                </li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/raca" class="nav-link" id="link">Raças</a>
                </li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/adocao" class="nav-link" id="link">Raças</a>
                </li>
                <li class="nav-item">
                    <a href="http://127.0.0.1:8000/cliente" class="nav-link" id="link">Clientes</a>
                </li>

            </ul>

        </div>

    </div>

</nav>
