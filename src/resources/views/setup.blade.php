<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css">
</head>

<style>
    .button {
        border-radius: 30px;
    }

</style>

<body>

    <section class="hero is-white is-fullheight has-text-centered">
        <div class="hero-body">
            <div class="container">
            <div class="section has-text-centered">
             @if(session('error'))
                        <p class="notification is-danger">
                            {{ session('error') }}
                        </p>
                        @endif
                        @if(session('success'))
                        <p class="notification is-success">
                            {{ session('success') }}
                        </p>
                        @endif
            </div>

                <section class="section">
                    <div class="columns">

                        <div class="column is-6 is-offset-3">

                            <div class="">
                                <div class="section">
                                    <div class="content">
                                        <h1 class="title is-1">
                                            <i class="fa fa-shield is-light" aria-hidden="true"></i>
                                        </h1>
                                        <h2 class="subtitle is-4 is-uppercase">
                                            Dash Auth Setup
                                        </h2>
                                        <p class="is-6">
                                            Dash Auth is simple way to create &amp manage Bouncer Roles &amp Abilities. Before we start you will need to create a super
                                            admin to manage roles &amp abilities. Please hit the button below to add a super
                                            admin continue your site.
                                        </p>

                                        <div class="section">
                                            <p>
                                                <a href="/dashauth/setup" class="button is-info is-large is-uppercase is-outlined">Create Super Admin Now</a>
                                            </p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>

</body>

</html>
