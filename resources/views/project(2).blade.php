<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Station</title>
    <script src="{{asset('project(2).js')}}"></script>
    <link href="{{asset('project(2).css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <div id="navbar">
        <div id="navbar-right"><a id="editing" class="navbar-brand">
                <img id="logo" src="./project2images/medical-logo2.1.jpg"></a>
            <a class="active" style="background-color:#B2B1B9; " href="{{url('/home')}}">Home</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/angiology.html')}}">Angiology</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/bariatrics.html')}}">Bariatrics</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/cardiology.html')}}">Cardiology</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/endocrinology.html')}}">Endocrinology</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/gastreonterlogy.html')}}">Gastroenterology</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/hematology.html')}}">Hematology</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/hepatology.html')}}">Hepatology</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/nephrology.html')}}">Nephrology</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/neurology.html')}}">Neurology</a>
            <a href="{{asset('medicine%20section%20for%20project(2)/oncology.html')}}">Oncology</a>
        </div>
    </div>
    <div class="bgimg-1">
        <div class="container" style="width: 50%;">
          <form class="stacked" action="{{route('upload')}}" method="post" enctype="multipart/form-data">
              <br><br><br><br><br><br><br><br><br><br>
              @csrf
            <div class="form-group">
                <span><label for="Owner">Owner Name</label></span>
                <input type="text" class="form-control" placeholder="Enter your name" name="Owner">
            </div>
            <div class="form-group">
                <span><label for="Book">Book Name</label></span>
                <input type="text" class="form-control" placeholder="Enter your book name" name="name">
            </div>
              <p><span id="inputGroupFileAddon01">Upload</span></p>
                      <input type="file" name="file">
              <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        @if($errors->any())
            <ul style="margin-left: 10px;font-size: 20px;" class="common font-effect-outline">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

    </div>
    <div class="containeer">
        <h4 class="display-6 font-effect-shadow-multiple" style="text-align: center;color:#003638;">types of cancer diseases</h4>
        <div id="accordion">
            <button type="button" class="btn  bi bi-caret-down" data-toggle="collapse" data-target="#bladder-cancer">Bladder Cancer</button>
            <button type="button" class="btn  bi bi-caret-down" data-toggle="collapse" data-target="#breast-Cancer">Breast Cancer</button>
            <button type="button" class="btn  bi bi-caret-down" data-toggle="collapse" data-target="#liver-cancer">Liver Cancer</button>
            <button type="button" class="btn bi bi-caret-down" data-toggle="collapse" data-target="#lung-cancer">Lung Cancer</button>
            <button type="button" class="btn  bi bi-caret-down" data-toggle="collapse" data-target="#thyroid-cancer">Thyroid Cancer</button>
            <button type="button" class="btn bi bi-caret-down" data-toggle="collapse" data-target="#kidney-cancer">Kidney Cancer</button>
            <button type="button" class="btn  bi bi-caret-down" data-toggle="collapse" data-target="#pancreatic-cancer">Pancreatic Cancer</button>
            <button type="button" class="btn  bi bi-caret-down" data-toggle="collapse" data-target="#prostate-cancer">Prostate Cancer</button>
            <button type="button" class="btn  bi bi-caret-down" data-toggle="collapse" data-target="#endomaterial-cancer">Endometrial Cancer</button>
            <div id="bladder-cancer" class="collapse show" data-parent="#accordion">
                Bladder cancer is a common type of cancer that begins in the cells of the bladder. The bladder is a hollow muscular organ in your lower abdomen that stores urine.
                <hr>
                Bladder cancer most often begins in the cells (urothelial cells) that line the inside of your bladder. Urothelial cells are also found in your kidneys and the tubes (ureters) that connect the kidneys to the bladder. Urothelial cancer can happen in the kidneys and ureters, too, but it's much more common in the bladder.
                <hr>
                Most bladder cancers are diagnosed at an early stage, when the cancer is highly treatable. But even early-stage bladder cancers can come back after successful treatment. For this reason, people with bladder cancer typically need follow-up tests for years after treatment to look for bladder cancer that recurs.
            </div>


            <div id="breast-Cancer" class="collapse" data-parent="#accordion">
                Breast cancer is the second most common cancer in women after skin cancer. Mammograms can detect breast cancer early, possibly before it has spread. Explore the links on this page to learn more about breast cancer prevention, screening, treatment, statistics, research, clinical trials, and more.
                <hr>
                Doctors know that breast cancer occurs when some breast cells begin to grow abnormally. These cells divide more rapidly than healthy cells do and continue to accumulate, forming a lump or mass. Cells may spread (metastasize) through your breast to your lymph nodes or to other parts of your body.
            </div>


            <div id="liver-cancer" class="collapse" data-parent="#accordion">
                Liver cancer includes hepatocellular carcinoma (HCC) and bile duct cancer (cholangiocarcinoma). Risk factors for HCC include chronic infection with hepatitis B or C and cirrhosis of the liver. Explore the links on this page to learn more about liver cancer treatment, prevention, screening, statistics, research, and clinical trials.
                <hr>
                Liver cancer is a cancer that's found anywhere in the liver. The liver is a large organ at the top right side of your tummy. It helps you digest your food and removes toxins. Liver cancer can sometimes start in your liver (primary) or spread from another organ (secondary).
            </div>
            <div id="lung-cancer" class="collapse" data-parent="#accordion">
                Lung cancer includes two main types: non-small cell lung cancer and small cell lung cancer. Smoking causes most lung cancers, but nonsmokers can also develop lung cancer. Explore the links on this page to learn more about lung cancer treatment, prevention, screening, statistics, research, clinical trials, and more.
                <hr>
                Lung cancer is the leading cause of cancer death and the second most diagnosed cancer in both men and women in the United States. After increasing for decades, lung cancer rates are decreasing nationally, as fewer people smoke cigarettes. Cigarette smoking is the number one cause of lung cancer.
            </div>
            <div id="thyroid-cancer" class="collapse" data-parent="#accordion">
                There are four main types of thyroid cancer. These are papillary, follicular, medullary, and anaplastic. Papillary is the most common type. The four types differ in how aggressive they are. Thyroid cancer that is found at an early stage can often be treated successfully. Explore the links on this page to learn more about thyroid cancer treatment, screening, statistics, research, and clinical trials.
                <hr>
                Thyroid cancer is a rare type of cancer that affects the thyroid gland, a small gland at the base of the neck that produces hormones. It's most common in people in their 30s and those over the age of 60. Women are 2 to 3 times more likely to develop it than men.
            </div>
            <div id="kidney-cancer" class="collapse" data-parent="#accordion">
                Kidney cancer can develop in adults and children. The main types of kidney cancer are renal cell cancer, transitional cell cancer, and Wilms tumor. Certain inherited conditions increase the risk of kidney cancer. Explore the links on this page to learn more about kidney cancer treatment, statistics, research, and clinical trials.
                <hr>
                Kidney cancer is cancer that begins in the kidneys. Your kidneys are two bean-shaped organs, each about the size of your fist. They're located behind your abdominal organs, with one kidney on each side of your spine. In adults, renal cell carcinoma is the most common type of kidney cancer.
            </div>
            <div id="pancreatic-cancer" class="collapse" data-parent="#accordion">
                Pancreatic cancer can develop from two kinds of cells in the pancreas: exocrine cells and neuroendocrine cells, such as islet cells. The exocrine type is more common and is usually found at an advanced stage. Pancreatic neuroendocrine tumors (islet cell tumors) are less common but have a better prognosis. Explore the links on this page to learn more about pancreatic cancer treatment, statistics, research, and clinical trials.
                <hr>
                Pancreatic cancer is cancer that forms in the cells of the pancreas. Pancreatic cancer begins in the tissues of your pancreas — an organ in your abdomen that lies behind the lower part of your stomach. Your pancreas releases enzymes that aid digestion and produces hormones that help manage your blood sugar
            </div>
            <div id="prostate-cancer" class="collapse" data-parent="#accordion">
                Prostate cancer is the most common cancer and the second leading cause of cancer death among men in the United States. Prostate cancer usually grows very slowly, and finding and treating it before symptoms occur may not improve men's health or help them live longer. Explore the links on this page to learn about prostate cancer treatment, prevention, screening, statistics, research, and more.
                <hr>
                Prostate cancer is cancer that occurs in the prostate. The prostate is a small walnut-shaped gland in males that produces the seminal fluid that nourishes and transports sperm. Prostate cancer is one of the most common types of cancer.
            </div>
            <div id="endomaterial-cancer" class="collapse" data-parent="#accordion">
                Uterine cancers can be of two types: endometrial cancer (common) and uterine sarcoma (rare). Endometrial cancer can often be cured. Uterine sarcoma is often more aggressive and harder to treat. Explore the links on this page to learn more about uterine cancer prevention, screening, treatment, statistics, research, and clinical trials
                <hr>
                Endometrial cancer is a disease in which malignant (cancer) cells form in the tissues of the endometrium. Obesity and having metabolic syndrome may increase the risk of endometrial cancer. Taking tamoxifen for breast cancer or taking estrogen alone (without progesterone) can increase the risk of endometrial cancer.
            </div>

        </div>
    </div>
    <div class="bgimg-2">
        <div class="caption">
        <span class="common font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Respiratory system</span>
        </div>
    </div>

    <div style="position:relative;">
        <div class="note">
            <h6>Respiratory diseases may be caused by infection, by smoking tobacco, or by breathing in secondhand tobacco smoke, radon, asbestos, or other forms of air pollution. Respiratory diseases include asthma, chronic obstructive pulmonary disease (COPD), pulmonary fibrosis, pneumonia, and lung cancer.</h6>
        </div>
    </div>
    <div class="bgimg-3">
        <div class="caption">
           <span class="common  font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Digestive system and Excretory system</span>
        </div>
    </div>

    <div style="position:relative;">
        <div class="note">
            <h6>A digestive disease is any health problem that occurs in the digestive tract. Conditions may range from mild to serious. Some common problems include heartburn, cancer, irritable bowel syndrome, and lactose intolerance.</h6>
        </div>
    </div>
    <div class="bgimg-4">
        <div class="caption">
            <span class="common  font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Circulatry system</span>
        </div>
    </div>

    <div style="position:relative;">
        <div class="note">
            <h6>High blood pressure or hypertension means the force or pressure of the blood flowing through the vessels is consistently too high. High blood pressure can lead to stroke, loss of vision, heart failure, heart attack, kidney disease, and reduced sexual function.</h6>
        </div>
    </div>
    <div class="bgimg-5">
        <div class="caption ">
           <span class="common font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Nervous system</span>
        </div>
    </div>

    <div style="position:relative;">
        <div class="note">
            <h6>Disorders of the nervous system can causeInfections, such as meningitis, encephalitis, polio, and epidural abscess. Structural disorders, such as brain or spinal cord injury, Bell's palsy, cervical spondylosis, carpal tunnel syndrome, brain or spinal cord tumors, peripheral neuropathy, and Guillain-Barré syndrome.</h6>
        </div>
    </div>
    <div class="bgimg-6">
        <div class="caption ">
            <span class="common font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Muscular system</span>
        </div>
    </div>

    <div style="position:relative;">
        <div class="note">
            <h6>Muscular dystrophy is a group of diseases that cause progressive weakness and loss of muscle mass. In muscular dystrophy, abnormal genes (mutations) interfere with the production of proteins needed to form healthy muscle. There are many kinds of muscular dystrophy.</h6>
        </div>
    </div>
    <div class="bgimg-7">
        <div class="caption ">
            <span class="common font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Skeletal System</span>
        </div>
    </div>


    <div style="position:relative;">
        <div class="note">
            <h6>Metabolic bone disease, any of several diseases that cause various abnormalities or deformities of bone. Examples of metabolic bone diseases include osteoporosis, rickets, osteomalacia, osteogenesis imperfecta, marble bone disease (osteopetrosis), Paget disease of bone, and fibrous dysplasia.</h6>
        </div>
    </div>
    <div class="bgimg-8">
        <div class="caption ">
            <span class="common font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Renal system and Urinary system</span>
        </div>
    </div>

    <div style="position:relative;">
        <div class="note">
            <h6>Urinary disorders can be caused by cancer, conditions affecting the structures near the urinary tract, infection, inflammation, injury, nervous system diseases, scarring, and urine crystallization. Treatment of urinary disorders involves identifying and treating the cause and symptoms. Some examples of possible treatments include self-care measures, medications to relieve pain, medications to relax the bladder, antibiotics, chemotherapy, radiation therapy, and surgery.</h6>
        </div>
    </div>
    <div class="bgimg-9">
        <div class="caption ">
            <span class="common font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Endocrine System</span>
        </div>
    </div>

    <div style="position:relative;">
        <div class="note">
            <h6>Common endocrine disorders include diabetes mellitus, acromegaly (overproduction of growth hormone), Addison's disease (decreased production of hormones by the adrenal glands), Cushing's syndrome (high cortisol levels for extended periods of time), Graves' disease (type of hyperthyroidism resulting in excessive thyroid.</h6>
        </div>
    </div>
    <div class="bgimg-10">
        <div class="caption ">
            <span class="common font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Immune system and lymphatic system</span>
        </div>
    </div>

    <div style="position:relative;">
        <div class="note">
            <h6>The lymphatic system clears away infection and keeps your body fluids in balance. If it's not working properly, fluid builds in your tissues and causes swelling, called lymphedema. Other lymphatic system problems can include infections, blockage, and cancer.</h6>
        </div>
    </div>
    <div class="bgimg-11">
        <div class="caption ">
       <span class="common font-effect-outline" style="background-color:transparent;font-size:25px;color: #f7f7f7;">Reproductive system</span>
        </div>
    </div>

    <div style="position:relative;">
        <div class="note">
            <h6>They include abnormal hormone production by the ovaries or the testes or by other endocrine glands, such as the pituitary, thyroid, or adrenals. Such diseases can also be caused by genetic or congenital abnormalities, infections, tumours, or disorders of unknown cause.</h6>
        </div>
    </div>

    <div class="bgimg-1">
        <div class="caption">
            <span class="common font-effect-outline" style=" box-shadow: 6px 8px 16px 0 rgba(0,0,0,0.5), 0 6px 20px 0 rgba(0,0,0,0.4); background-color: #2F5D62;">Here you will find every detail you want about medicine</span>
        </div>
    </div>


</body>

</html>
