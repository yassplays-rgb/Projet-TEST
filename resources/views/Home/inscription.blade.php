<div class="services section" id="inscription">
    <div class="container">
        <div class="row">
            <!-- Étudiant -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="{{ asset('Home/assets/images/graduated.png') }}" alt="online degrees">
                    </div>
                    <div class="main-content">
                        <h4>Étudiant</h4>
                        <p>Cliquez et remplissez vos informations pour vous inscrire et vous connecter afin de créer votre futur.</p>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_type" value="1">
                            <div class="main-button">
                                <button type="submit"><a href="{{ route('register1') }}">S'inscrire</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Enseignant -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="{{ asset('Home/assets/images/teacher.png') }}" alt="short courses">
                    </div>
                    <div class="main-content">
                        <h4>Enseignant</h4>
                        <p>Créez votre compte pour vous connecter et aider les étudiants dans leur formation professionnelle.</p>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_type" value="2">
                            <div class="main-button">
                                <button type="submit"><a href="{{ route('register2') }}">S'inscrire</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Chef de département -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="{{ asset('Home/assets/images/service.png') }}" alt="web experts">
                    </div>
                    <div class="main-content">
                        <h4>Chef de département</h4>
                        <p>Inscrivez-vous pour consulter les informations des étudiants et des enseignants.</p>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_type" value="0">
                            <div class="main-button">
                                <button type="submit"><a href="{{ route('register') }}">S'inscrire</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
