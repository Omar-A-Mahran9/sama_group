@extends('web.layouts.master')
@section('title', ' - ' . $page[0]->titleAr)

@section('content')
    <div class="head-page" style="background-image: url({{ asset('images/pages/' . $page[0]->image) }})">
        <div class="container">
            <h2>{{ $page[0]->titleAr }}</h2>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page">من نحن</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12" id="presdent_talk">
                <div class="links">
                    <a href="#presdent_talk">كلمة الرئيس</a>
                    <a href="#history">تاريخ الشركة</a>
                    <a href="#value">قيم سما</a>
                    <a href="#saftey">السلامة أولاً</a>
                    <a href="#prod">الجودة وزيادة الإنتاجية</a>
                    <a href="#enviro">البيئة والاستدامة</a>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div id="history" class="inner-content mb-5">
                    <h3 class="mb-3 fw-bold">كلمة الرئيس</h3>
                    <p style="text-align: justify; line-height:32px">
                        بفضــل وتوفيــق مــن المولــى عــز وجــل خطــت ســما خطــوات متميــزة
                        طــوال تاريخهــا الممتــد نحــو تحقيــق تجربــة فريــدة ومتميــزة فــي
                        المجــاالت العســكرية والمدنيــة والمجــاالت األخــرى. نحــن ملتزمــون
                        بقيــم أساســية تشــكل جوهــر عملنــا، االمتيــاز، النزاهــة، االبتــكار،
                        السالمـة، والجـودة وسـرعة اإلنتـاج. نعمـل بجـد لتوفيـر حلـول مخصصـة
                        ومتكاملــة تلبــي احتياجــات كل عميــل، مســتفيدون مــن خبرتنــا الغنيــة
                        إلنجـاز هـذا الهـدف. نضـع االسـتدامة والتحسـين المسـتمر فـي صـدارة
                        أولوياتنـا، مـع التركيـز علـى تعزيـز أدائنـا وتقليـل التأثيـر السـلبي علـى
                        ً
                        البيئـة. كذلـك نحـن ملتزمـون بتطويـر فريقنـا وتمكينهـم ليكونـوا عنصـرًا
                        ً فـي رحلتنـا نحـو النجـاح. كفريـق متحـد ومتناغـم، نطمـح
                        ً ومؤثـرًا
                        فـاعًال
                        إلـى تعزيـز مكانتنـا كشـركة رائـدة فـي كافـة مجـاالت عملنـا، مـع الحـرص
                        علـى تحقيـق أعلـى معاييـر الجـودة والكفـاءة فـي جميـع مشـروعاتنا
                        وخدماتــنا</p>
                    <div style="text-align:end">
                        <p class="fw-bold" style="padding-left: 47px">رئيس مجلس االدرة
                        </p>
                        <p>سلطان بن سلمان سليم الصاعدي</p>
                    </div>

                </div>
                <div id="value" class="inner-content mb-5">
                    <h3 class="mb-3 fw-bold">مجموعة ســــــــــــــما (منذ 1990)</h3>
                    <p style="text-align: justify; line-height:32px">كوننا مجموعة إنشاءات تأسست في عام 1990، فقد شهدنا نموًا
                        ملحوظًا على مر السنين، وقمنا بتوسيع نطاق أعمالنا وتنويعها في مجموعة متنوعة من القطاعات. ومن خلال
                        مبادرات النمو الاستراتيجي، تقدم مجموعتنا خدمات في القطاعات المدنية والعمرانية والصناعية والتجارية
                        والعسكرية والطبية. لدينا تفاني في تحقيق التميز والاستباقية وذلك يتجسد بوضوح في مسيرتنا التطورية.</p>


                </div>
            </div>


        </div>
    </div>
    <div id="saftey" class="aboutt pb-4 pt-5" >
        <div class="container">
            <div class="row align-items-center justify-content-center gap-5">

                <div class="item col-12 col-md-3 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">


                        <h2 class="fw-bold mt-2 mb-3">
                            النزاهة
                        </h2>


                    </div>
                    <div style="margin: 0 auto; text-align: center;">
                        <p class="text-justify" style="display: inline-block; text-align: justify; max-width: 600px;">
                            نقــوم بجميــع مهامنــا بأمانــة ونزاهــة، لــذا يمكنك أن تثق بنا</p>
                    </div>
                </div>

                <div class="item col-12 col-md-4 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">


                        <h2 class="fw-bold mt-2  mb-3">
                            التفرد </h2>


                    </div>
                    <div style="margin: 0 auto; text-align: center;">
                        <p class="text-justify" style="display: inline-block; text-align: justify; max-width: 600px;">
                            كوننا مجموعة تعمل في مجالات متنوعة
                            نحتاج إلى التميز والابتكار لنكون متقدمين
                            عن غيرنا بتوفير جميع الحول المتكاملة
                            وإيجاد الحلول المناسبة التي تلبي احتياجات
                            .</p>
                    </div>
                </div>

                <div class="item col-12 col-md-4 mb-4 text-white text-center">
                    <div class="d-flex gap-3 justify-content-center align-items-center">


                        <h2 class="fw-bold mt-2  mb-3">
                            المضي قدماً </h2>


                    </div>

                    <div style="  margin: 0 auto; text-align: center;">
                        <p class="text-justify" style="display: inline-block; text-align: justify; max-width: 600px;">
                            مؤمنـون بضـرورة التغيير المسـتمر والسـعي
                            لتحقيـق التحسـين والتعلـم المسـتمر، بهـدف
                            رـفع المعايـير وتحقـيق المصلـحة المـشتركة</p>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <div id="prod" class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3 class="fw-bold mb-4">السلامة أولاً</h3>
                <p style="text-align: justify; width:95%">بفضل من الله وامتداداً لتميز سما فقد حققت جائزة افضل مقاول في
                    مشروع اكساجون
                    في مدينة نيوم، حيث حصلت على
                    14 عقد عمل في المشروع، مما يعد إنجازًا مميزاً، حيث لم تحدث أي إصابات بليغة، وهذا يعكس التزامنا المستمر
                    بالسلامة. لقد اتخذنا تدابير شاملة في ادارة الصحة والسلامة المهنية، لدينا قاعدة عمالية تضم نحو 25,875
                    شخصًا. قمنا بتنظيم1877 جلسة تعريفية و224 عملية تفتيش. حققنا أكثر من 30,502,451 ساعة عمل آمنة، ما يعكس
                    التزامنا بتوفير بيئة عمل آمنة. ولم يسجل وقوع أي حوادث كبيرة على مدار الـ14,541,117 كلم التي قمنا
                    بالقيادة خلالها، مما يؤكد التميز التشغيلي والالتزام بالسلامة في جميع جوانب عملنا.</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('../images/abouts/2.png') }}" alt="">

                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('../images/abouts/3.png') }}" alt="">

                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('../images/abouts/1.png') }}" alt="">

                        </div>
                    </div>


                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>
        </div>

    </div>
    <div id="enviro" class="container mt-5 mb-5">
        <div class="row">
            <h3 class="fw-bold mb-4">الجودة وسرعة اإلنتاجية</h3>

            <div class="col-12 col-md-6">
                <h5 style="color: #128977">الجودة</h5>
                <p style="text-align: justify; width:95%">نحـن ملتزمـون بتحقيـق جـودة تتجـاوز المعاييـر فـي جميـع مجـاالت
                    عملنـا. نهـدف إلـى تحقيـق مسـتوى اسـتثنائي مـن التفـوق فـي القطاعـات
                    ً لـسرعة التـسليم
                    ً ا ـمن التصامـيم المبتـكرة إـلى التنفـيذ الدقـيق وـصوًال
                    الـتي نعـمل بـها وفـخورون بجمـيع مـشاريعنا، ـبدًء</p>
            </div>
            <div class="col-12 col-md-6">
                <h5 style="color: #128977">سرعة االنتاجية</h5>
                <p style="text-align: justify; width:95%">مفتـاح نجـاح سـما ليـس اختصـار األعمـال، بـل إنشـاء الظـروف
                    المالئمـة إلكمـال الجـداول الزمنيـة والخطـط فـي الوقـت المناسـب واالسـتفادة
                    القصـوى مـن الوقـت المتـاح. يتضمـن ذلـك التخطيـط المسـبق وتوفيـر العمـال المدربيـن واألدوات والمعـدات
                    المناسـبة، باإلضافـة إلـى توفيـر
                    التعليــمات واإلــشراف المناــسب للعــمال</p>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-3"> <img src="{{ asset('../images/abouts/logo1.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-3"> <img src="{{ asset('../images/abouts/logo2.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-3"> <img src="{{ asset('../images/abouts/logo3.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-3"> <img src="{{ asset('../images/abouts/logo4.png') }}" alt="" width=250>
            </div>
        </div>
    </div>
    <div style="background-color: #128977" class="p-4">
        <div class="container mt-5 mb-5 text-white">
            <div class="row justify-content-center">
                <h3 class="fw-bold mb-4 text-center">البيئة والاستدامة</h3>
                <h5 style="color: #fffff; margin-top:-13px; font-size:15px" class="text-center fw-bold mb-4">
                    الاستدامة ليست مجرد
                    جزء من اسرتاتيجيتنا،
                    بل هي هويتنا،
                    ملتزمون بكوننا جزءًاً
                    من الحل يف مواجهة
                    التحديات البيئية.</h5>
                <div class="mb-4" style="border-bottom:5px solid #666666; width:100px; margin:auto; margin-top:-10px;">
                </div>
                <div class="container">
                    <div class="col-12 col-md-8 m-auto">
                        <p class="text-center" style="line-height: 33px;">نــدرك يف سام أن مســتقبل األعامل
                            ال يكمــن فقــط يف النجــاح املادي،
                            بــل يف الحفــاظ عىل كوكبنــا، لــذا
                            نســعى لتطبيــق معــايري البنــاء
                            األخرض كاســتخدام مــواد مســتدامة
                            وتصمــيامت تعتمــد عىل كفــاءة
                            اســتخدام الطاقــة، نركــز عىل ان
                            تكــون أعاملنــا متميــزة بقلــة تأثريهــا
                            بدعــم
                            عىل البيئــة، تلتــزم سام أيضــًاً
                            مصـادر الطاقـة املتجـددة واالسـتثامر
                            يف تقنيــات الطاقــة الشمســية،
                            نطبــق أفضــل املامرســات الصناعيــة
                            لـضامن عمليـات إنتاجيـة تـحرتم البيئـة،
                            وتســهم يف الحفــاظ عليهــا.
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="container position-relative">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp1.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp2.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp3.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp4.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp5.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp6.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp7.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp8.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp9.png') }}" alt="" width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp10.png') }}" alt=""
                    width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp11.png') }}" alt=""
                    width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp12.png') }}" alt=""
                    width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp13.png') }}" alt=""
                    width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp14.png') }}" alt=""
                    width=250>
            </div>
            <div class="col-12 col-md-2"> <img src="{{ asset('../images/abouts/comp15.png') }}" alt=""
                    width=250>
            </div>
        </div>
        <img src="{{ asset('web/assets/images/logo.png') }}" alt="Watermark" class="watermark">
    </div>
    </div>
@endsection
