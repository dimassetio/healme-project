@extends('app.feature.tesGratis.components.testRun.base-view')
@section('title', 'Result Test | Healme')
@section('content-runTest')
<div class="font-poppins-regular text-lg">
    <p>
        Hasil tes Anda menunjukkan tingkat gangguan sebagai berikut:
    </p>

    <style>
        .card-custom-rounded {
            border-radius: 2rem;
        }

        .card-anxiety, .card-depression, .card-stress {
            background-color: #FCCFBF; /* Light pink color for all cards */
            color: #000000; /* Black text */
        }

        .card-body {
            padding: 0.6rem; /* Reduced padding for card body */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .font-weight-bold {
            font-weight: bold; /* Ensure bold text */
        }

        .scale-badge {
            display: inline-block;
            padding: 0.5rem 1rem;
            border-radius: 1.25rem;
            color: #ffffff;
            font-size: 1rem;
            font-weight: bold;
            text-align: center;
        }

        .scale-normal {
            background-color: #477abd;
        }

        .scale-ringan {
            background-color: #41ff07;
        }

        .scale-sedang {
            background-color: #ffea00;
        }

        .scale-parah {
            background-color: #e9a32b;
        }

        .scale-sangat-parah {
            background-color: #f03030; /* Purple for extremely severe */
        }
    </style>

    <div class="container mt-4">
        <div class="row">
            <!-- Card for Anxiety -->
            <div class="col-md-4 mb-4">
                <div class="card card-custom-rounded card-anxiety" style="width: 100%;">
                    <div class="card-body text-center font-weight-bold">
                        <h5 class="card-title mb-3">Anxiety</h5>
                        <p class="card-text">
                            <span class="d-block font-weight-bold" style="font-size: 2rem;">{{ $total_anxiety }}</span>
                            <span class="d-block mt-2 scale-badge scale-{{ strtolower($scale_anxiety) }}">
                                {{ $scale_anxiety }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card for Depression -->
            <div class="col-md-4 mb-4">
                <div class="card card-custom-rounded card-depression" style="width: 100%;">
                    <div class="card-body text-center font-weight-bold">
                        <h5 class="card-title mb-3">Depression</h5>
                        <p class="card-text">
                            <span class="d-block font-weight-bold" style="font-size: 2rem;">{{ $total_depresi }}</span>
                            <span class="d-block mt-2 scale-badge scale-{{ strtolower($scale_depresi) }}">
                                {{ $scale_depresi }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card for Stress -->
            <div class="col-md-4 mb-4">
                <div class="card card-custom-rounded card-stress" style="width: 100%;">
                    <div class="card-body text-center font-weight-bold">
                        <h5 class="card-title mb-3">Stress</h5>
                        <p class="card-text">
                            <span class="d-block font-weight-bold" style="font-size: 2rem;">{{ $total_stress }}</span>
                            <span class="d-block mt-2 scale-badge scale-{{ strtolower($scale_stress) }}">
                                {{ $scale_stress }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <p class="mt-2">
        Jika Anda merasa perlu, pertimbangkan untuk bergabung dengan komunitas atau menghubungi psikolog kami untuk meningkatkan kesejahteraan mental Anda.
    </p>

    <div class="container mt-10 flex justify-end">
        <a href="{{ route('app.psikolog') }}"
            class="text-white text-sm bg-[#121481] hover:bg-[#3771c2] font-bold rounded-full px-6 py-2 me-2 mb-2">Hubungi Psikolog</a>
        <a href="{{ route('app.home') }}"
            class="text-white text-sm bg-[#121481] hover:bg-[#3771c2] font-bold rounded-full px-6 py-2 me-2 mb-2">Kembali</a>
    </div>
</div>

    @endsection
