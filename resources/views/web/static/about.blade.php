@extends('layout.app')

@section('content')
<img src="{{ asset('assets/images/cloud1.png') }}" alt="cloud1" class="flex absolute z-1 left-0 sm:w-[120px] md:w-[150px] lg:w-[180px] xl:w-[210px] 2xl:w-[250px]">
<img src="{{ asset('assets/images/cloud2.png') }}" alt="cloud2" class="flex absolute z-1 right-0 sm:w-[120px] md:w-[150px] lg:w-[180px] xl:w-[210px] 2xl:w-[250px]">

<div class="bg-white w-full">
    <div class="flex justify-center 2xl:mt-[60px] sm:mt-[30px] xl:mt-[50px]">
        <h1 class="text-[#279EFF] font-semibold text-center 2xl:text-[44px] xl:text-[38px] lg:text-[36px] md:text-[32px] sm:text-[26px]">About Us</h1>
    </div>
</div>

<div class="flex w-full 2xl:mt-[120px] sm:mt-[70px] sm:flex-col sm:justify-center sm:items-center">

    <div class="2xl:w-[720px] xl:w-[600px] lg:w-[500px] md:w-[400px] sm:w-[300px] absolute 2xl:left-[150px] 2xl:top-[350px] sm:left-[20px] sm:top-[180px] md:left-[40px] md:top-[200px] lg:left-[120px] lg:top-[220px] xl:left-[200px] xl:top-[300px]">
        <h1 class="text-[#279EFF] font-semibold 2xl:text-[36px] xl:text-[30px] lg:text-[28px] md:text-[24px] sm:text-[18px] text-left pt-[10px] pb-[10px]"> Agora</h1>
        <p class="text-justify font-normal text-[14px] leading-[20px] 2xl:leading-[40px] xl:leading-[35px] lg:leading-[30px] md:leading-[25px] sm:leading-[20px] 2xl:w-[580px] sm:w-[300px] md:w-[320px] lg:w-[350px] xl:w-[480px] mt-[10px] ">
            Agora is a ticketing website designed to boost public participation in cultural activities. It simplifies the ticket purchasing process and offers comprehensive information about cultural events, making it easier for people to discover and attend these events. This streamlined approach enhances accessibility and engagement in cultural experiences.
        </p>
        <div class="flex flex-row mt-[20px] sm:text-[14px]">
            <button class="w-[75px] h-[30px] sm:w-[50px] border-2 border-solid border[#6D758F] text-[#0d6efd] rounded-[20px] flex justify-center items-center mr-[10px] hover:bg-[#0d6efd] hover:text-white px-10">Culture</button>
            <button class="w-[75px] h-[30px] sm:w-[50px] border-2 border-solid border[#6D758F] text-[#0d6efd] rounded-[20px] flex justify-center items-center mr-[10px] hover:bg-[#0d6efd] hover:text-white px-10">Music</button>
            <button class="w-[75px] h-[30px] sm:w-[50px] border-2 border-solid border[#6D758F] text-[#0d6efd] rounded-[20px] flex justify-center items-center mr-[10px] hover:bg-[#0d6efd] hover:text-white px-10">Dance</button>
            <button class="w-[75px] h-[30px] sm:w-[50px] border-2 border-solid border[#6D758F] text-[#0d6efd] rounded-[20px] flex justify-center items-center mr-[10px] hover:bg-[#0d6efd] hover:text-white px-10">Art</button>
        </div>
    </div>

    <img src="{{ asset('assets/images/Intersect1.svg') }}" alt="Image 1" class="absolute 2xl:w-[230px] sm:w-[120px] md:w-[150px] lg:w-[170px] xl:w-[200px] 2xl:right-[450px] 2xl:top-[350px] sm:right-[160px] md:right-[200px] lg:right-[290px] xl:right-[430px] xl:top-[330px] sm:top-[200px] md:top-[260px] z-1">
    <img src="{{ asset('assets/images/intersect2.svg') }}" alt="Image 2" class="absolute 2xl:w-[230px] sm:w-[120px] md:w-[150px] lg:w-[170px] xl:w-[200px] 2xl:right-[190px] 2xl:top-[400px] sm:right-[20px] md:right-[30px] lg:right-[100px] xl:right-[200px] xl:top-[380px] sm:top-[240px] md:top-[300px] z-1">
    <img src="{{ asset('assets/images/intersect3.svg') }}" alt="Image 3" class="absolute 2xl:w-[230px] sm:w-[120px] md:w-[150px] lg:w-[170px] xl:w-[200px] 2xl:right-[310px] 2xl:top-[550px] sm:right-[80px] md:right-[110px] lg:right-[190px] xl:right-[320px]  xl:top-[470px] sm:top-[300px] md:top-[380px] lg:top-[400px] z-2">

</div>

<h1 class="text-[#279EFF] font-semibold text-center w-full pb-4 2xl:text-4xl xl:text-[30px] lg:text-[28px] md:text-[24px] sm:text-[18px] 2xl:mt-[500px] sm:mt-[270px] md:mt-[350px] lg:mt-[380px] xl:mt-[450px]">Our Vision</h1>
<div class="w-full px-4 sm:px-6 lg:px-8 xl:px-16 2xl:px-24 mb-4 flex flex-wrap justify-center lg:justify-between">
    <div class="w-full sm:w-2/3 md:w-2/3 lg:w-1/3 xl:w-1/3 2xl:w-1/3 px-4 mb-4 mx-auto">
        <div class="border-none rounded-lg shadow-md p-6 h-full">
            <img src="{{ asset('assets/images/1st.svg') }}" alt="1" class="mx-auto mb-4 h-12">
            <p class="text-center font-normal text-base leading-snug sm:text-sm">Increasing public awareness of Indonesia's cultural diversity is enhanced by promoting regional cultural heritage.</p>
        </div>
    </div>
    <div class="w-full sm:w-2/3 md:w-2/3 lg:w-1/3 xl:w-1/3 2xl:w-1/3 px-4 mb-4 mx-auto">
        <div class="border-none rounded-lg shadow-md p-6 h-full">
            <img src="{{ asset('assets/images/2nd.svg') }}" alt="2" class="mx-auto mb-4 h-12">
            <p class="text-center font-normal text-base leading-snug sm:text-sm">Make it easier to purchase tickets for cultural events, increase accessibility and participation in cultural activities.</p>
        </div>
    </div>
    <div class="w-full sm:w-2/3 md:w-2/3 lg:w-1/3 xl:w-1/3 2xl:w-1/3 px-4 mb-4 mx-auto">
        <div class="border-none rounded-lg shadow-md p-6 h-full">
            <img src="{{ asset('assets/images/3rd.svg') }}" alt="3" class="mx-auto mb-4 h-12">
            <p class="text-center font-normal text-base leading-snug sm:text-sm">Encourages people's enthusiasm for attending cultural events, strengthening the sense of cultural identity.</p>
        </div>
    </div>
</div>
<h1 class="text-[#279EFF] font-semibold text-center w-full 2xl:text-4xl xl:text-[30px] lg:text-[28px] md:text-[24px] sm:text-[18px] 2xl:mt-[100px] sm:mt-[50px] 2xl:mb-[80px]">Partnership</h1>
<div class="flex flex-wrap justify-center lg:justify-between items-center 2xl:ml-[120px] sm:flex-col lg:flex-row lg:px-[50px] xl:pr-[150px] xl:pl-[130px]">
    <img src="{{ asset('assets/images/wonderfulin.png') }}" alt="wonderful indonesia" class="w-[257px] h-[142px] lg:w-[130px] lg:h-[70px] xl:w-[257px] xl:h-[142px] mt-10 mb-5 lg:mb-10">
    <img src="{{ asset('assets/images/ancol.png') }}" alt="ancol" class="w-[200px] h-[65px] lg:w-[180px] lg:h-[60px] xl:w-[200px] xl:h-[65px] lg:ml-[30px] mt-5 mb-5 lg:mt-10 lg:mb-10">
    <img src="{{ asset('assets/images/gojek.png') }}" alt="gojek" class="w-[252px] h-[72px] lg:w-[232px] lg:h-[62px] xl:w-[200px] xl:h-[65px] lg:ml-[30px] mt-5 mb-5 lg:mt-10 lg:mb-10">
    <img src="{{ asset('assets/images/detik.png') }}" alt="detik" class="w-[264px] h-[75px] lg:w-[244px] lg:h-[65px] xl:w-[200px] xl:h-[65px] lg:ml-[30px] mt-5 mb-5 lg:mt-10 lg:mb-10">
</div>
@endsection
