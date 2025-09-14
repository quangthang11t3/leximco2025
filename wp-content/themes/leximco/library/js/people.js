(function($) {
    const bgCanvas = document.getElementById('js_background_people');
    if (!$(bgCanvas).length) return;
    const peopleWrap = $('.page_people');
    const ctxBgCanvas = bgCanvas.getContext("2d");
    const bgCanvasVirtual = document.createElement('canvas');
    const ctxBgCanvasVirtual = bgCanvasVirtual.getContext("2d");
    let aniPCArr = [];
    let aniSPArr = [];
    let posInitCirclePC = [];
    let posInitCircleSP = []
    let _pos = 0;
    let _height = 0;
    const createPosCircle = ($quanlity, $model = 'pc') => {
        let _arrayPos = [];
        bgCanvasVirtual.width = peopleWrap.width();
        bgCanvasVirtual.height = peopleWrap.height();
        for (i = 0; i < $quanlity; i++) {
            var x = Math.floor(Math.random() * (bgCanvasVirtual.width));
            var y = Math.floor(Math.random() * bgCanvasVirtual.height);
            var xE = x + Math.floor(Math.random() * 20);
            var yE = (y + Math.floor(Math.random() * ($model === 'pc' ? 200 : 100)) * (Math.random() > 0.5 ? 1 : -1));
            var radius = Math.floor(Math.random() * ($model === 'pc' ? 100 : 30));
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            _arrayPos.push({ x, y, xE, yE, radius, style: "rgba(" + r + "," + g + "," + b + ",0.5)" });
        }
        return _arrayPos;
    }

    const drawCircle = ($arrayPos) => {
        bgCanvas.width = peopleWrap.width();
        bgCanvas.height = $(window).height();
        bgCanvasVirtual.width = peopleWrap.width();
        bgCanvasVirtual.height = peopleWrap.height();
        ctxBgCanvasVirtual.clearRect(0, 0, bgCanvasVirtual.width, bgCanvasVirtual.height);
        $arrayPos.forEach(item => {
            ctxBgCanvasVirtual.beginPath();
            ctxBgCanvasVirtual.arc(item.x, item.y, item.radius, Math.PI * 2, 0, false);
            ctxBgCanvasVirtual.fillStyle = item.style;
            ctxBgCanvasVirtual.fill();
            ctxBgCanvasVirtual.closePath();
        });
        ctxBgCanvas.clearRect(0, 0, ctxBgCanvas.width, ctxBgCanvas.height);
        ctxBgCanvas.drawImage(bgCanvasVirtual, 0, _pos, bgCanvas.width, _height, 0, 0, bgCanvas.width, _height);
    }

    function scrollParallaCanvas() {
        const _scrollTop = $(window).scrollTop();
        const _heightSection = peopleWrap.height();
        const _contactOffset = $('#footerArea').offset().top;
        const _heightPage = $('#mainArea').height();
        const _maxParallax = (_heightPage - _heightSection);
        const _ratio = Math.min(1, _scrollTop / _heightPage);
        _pos = _ratio * _maxParallax;
        if (_scrollTop + $(window).height() <= _contactOffset) {
            _height = bgCanvas.height
        } else {
            _height = bgCanvas.height - (_scrollTop + $(window).height() - _contactOffset)
        }
    }

    function handleInitResponseCanvas($model) {
        if (aniPCArr.length) aniPCArr.forEach((item) => { item.kill() });
        if (aniSPArr.length) aniSPArr.forEach((item) => { item.kill() });
        aniPCArr = [];
        aniSPArr = [];
        if ($model === 'pc') {
            posInitCirclePC = createPosCircle(20, 'pc');
            posInitCirclePC.forEach((item, idx) => {
                aniPCArr[idx] = gsap.to(posInitCirclePC[idx], {
                    x: item.xE,
                    y: item.yE,
                    duration: 20 + Math.floor(Math.random() * 10),
                    repeat: -1,
                    yoyo: true,
                    onUpdate: function() {
                        if (idx === posInitCirclePC.length - 1) drawCircle(posInitCirclePC)
                    }
                })
            })
        } else {
            posInitCircleSP = createPosCircle(10, 'sp');
            posInitCircleSP.forEach((item, idx) => {
                aniSPArr[idx] = gsap.to(posInitCircleSP[idx], {
                    x: item.xE,
                    y: item.yE,
                    duration: 10 + Math.floor(Math.random() * 10),
                    repeat: -1,
                    yoyo: true,
                    onUpdate: function() {
                        if (idx === posInitCircleSP.length - 1) drawCircle(posInitCircleSP)
                    }
                })
            });
        }
    }

    function scrollShowBLock() {
        let section = $('.person-index__item');
        section.each(function() {
            const _self = $(this);
            if (_self.hasClass('is-scr-show')) return;
            const _posT = _self.offset().top;
            const _posB = _posT + _self.height();
            const _scrollBotom = $(window).scrollTop() + $(window).height();
            if (_scrollBotom >= _posB) _self.addClass('is-scr-show');
        })
        scrollParallaCanvas()
    }

    function switchPCSP(event) {
        bgCanvasVirtual.width = peopleWrap.width();
        bgCanvasVirtual.height = peopleWrap.height();
        if (event.matches) {
            handleInitResponseCanvas('sp')
        } else {
            handleInitResponseCanvas('pc')
        }
    }
    $(window).on('load scroll', scrollShowBLock);
    const mql = window.matchMedia("(max-width: 768px)");
    mql.addEventListener("change", switchPCSP);
    switchPCSP(mql)
})(jQuery)