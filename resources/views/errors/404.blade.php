@extends('layouts.frontend.master')

@section('content')
    <section
        style="position: relative; z-index: 1; min-height: 100vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 2rem; background: url('{{ asset('frontend/assets/img/bg/b-1-1.png') }}') no-repeat center center/cover;">
        <div style="max-width: 600px; width: 100%;">
            <h1 style="font-size: 8rem; margin-bottom: 1rem; line-height: 1;">404</h1>
            <h2 style="font-size: 2rem; margin-bottom: 1rem;"><span style="color: #f00;">Ooops,</span> Page Not Found</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">We can't seem to find the page you're looking for.</p>
            <a href="/"
                style="display: inline-block; padding: 0.8rem 2rem; font-size: 1rem; background-color: #e88027; color: #fff; border-radius: 5px; text-decoration: none;">Back
                to Home</a>
        </div>

        <!-- Responsive inline styles -->
        <style>
            @media (max-width: 1200px) {
                section div h1 {
                    font-size: 7rem;
                }

                section div h2 {
                    font-size: 1.8rem;
                }

                section div p {
                    font-size: 1.1rem;
                }
            }

            @media (max-width: 992px) {
                section div h1 {
                    font-size: 6rem;
                }

                section div h2 {
                    font-size: 1.6rem;
                }

                section div p {
                    font-size: 1rem;
                }
            }

            @media (max-width: 768px) {
                section div h1 {
                    font-size: 5rem;
                }

                section div h2 {
                    font-size: 1.4rem;
                }

                section div p {
                    font-size: 0.95rem;
                }

                section a {
                    padding: 0.6rem 1.5rem;
                    font-size: 0.95rem;
                }
            }

            @media (max-width: 576px) {
                section div h1 {
                    font-size: 4rem;
                }

                section div h2 {
                    font-size: 1.2rem;
                }

                section div p {
                    font-size: 0.9rem;
                }

                section a {
                    padding: 0.5rem 1.2rem;
                    font-size: 0.9rem;
                }
            }
        </style>
    </section>
@endsection
