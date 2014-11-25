<?php

class SocialNetworks extends BaseController {
    /**
     * Login user with facebook
     *
     * @return void
     */

    //------------------------------- FACEBOOK -------------------------------

    public function signUpWithFacebook() {


        $code = Input::get( 'code' );
        $fb = OAuth::consumer( 'Facebook' );
        if ( !empty( $code ) ) {
            $token = $fb->requestAccessToken( $code );
            $result = json_decode( $fb->request( '/me' ), true );

            $user_data = array(
                'email' => $result['email'],
                'first_name'=> $result['first_name'],
                'last_name'=> $result['last_name'],
                'user_id' => $result['id'],
            );

            $user = new User;
            $user->first_name=$result['first_name'];
            $user->last_name=$result['last_name'];
            $user->email=$result['email'];

            $user_validator = User::where('email',$result['email'])->first();
            if(is_null($user_validator)){
                $user->save();



                return Redirect::to('login_index')->with('success', 'Te has registrado exitosamente');
            }
            else
            {
                return Redirect::to('registrarse')->with('failure','Usuario existente');
            }

        }
        else {
            $url = $fb->getAuthorizationUri();
            return Redirect::to( (string)$url );
        }
    }
    public function loginWithFacebook() {

        // get data from input
        $code = Input::get( 'code' );
        // get fb service
        $fb = OAuth::consumer( 'Facebook' );
        // check if code is valid
        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {
            // This was a callback request from facebook, get the token
            $token = $fb->requestAccessToken( $code );
            // Send a request with it
            $result = json_decode( $fb->request( '/me' ), true );
            //$message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
            //echo $message. "<br/>";
            $user = User::where('email',$result['email'])->first();

            if(is_null($user)){
                return Redirect::to('/')->with('failure','Usuario no registrado');
            }
            else
            {
                Auth::login($user);

                Flash::success('Bienvenido nuevamente ' . Auth::user()->first_name);

                return Redirect::route('feed_path');
            }
        }
        // if not ask for permission first
        else {
            // get fb authorization
            $url = $fb->getAuthorizationUri();

            // return to facebook login url
            return Redirect::to( (string)$url );
        }
    }

    //------------------------------- GOOGLE + -------------------------------

    public function signUpWithGoogle() {



        // get data from input
        $code = Input::get( 'code' );
        // get google service
        $googleService = OAuth::consumer( 'Google' );
        // check if code is valid
        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {
            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken( $code );

            $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );
            // Send a request with it
            /* $user_data = array(
                    'email' => $result['email'],
                    'first_name'=> $result['first_name'],
                    'last_name'=> $result['last_name'],
                    'password'=> $result['id'],
                 );*/

            $user = new User;
            $user->first_name=$result['given_name'];
            $user->last_name=$result['family_name'];
            $user->email=$result['email'];

            $user_validator = User::where('email',$result['email'])->first();
            if(is_null($user_validator)){
                $user->save();


                return Redirect::to('login_index')->with('success', 'Te has registrado exitosamente');

            }
            else
            {
                return Redirect::to('registrarse')->with('failure','Usuario existente');
            }
        }
        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();
            // return to facebook login url
            return Redirect::to( (string)$url );
        }
    }

    public function loginWithGoogle() {
        // get data from input
        $code = Input::get( 'code' );
        // get google service
        $googleService = OAuth::consumer( 'Google' );
        // check if code is valid
        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {
            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken( $code );
            $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );
            // Send a request with it
            $user = User::where('email',$result['email'])->first();
            if(is_null($user)){
                return Redirect::to('/')->with('failure','Usuario no registrado');
            }
            else
            {
                Auth::login($user);

                Flash::success('Bienvenido nuevamente ' . Auth::user()->first_name);

                return Redirect::route('feed_path');
            }

        }
        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();
            // return to facebook login url
            return Redirect::to( (string)$url );
        }
    }

}