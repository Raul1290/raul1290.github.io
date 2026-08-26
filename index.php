<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma 9 ¾ | Onde a Magia Acontece</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Variáveis de Cores das 4 Casas (Fundo, Texto Primário, Destaque) */
        :root {
            /* Gryffindor Default */
            --bg-color: #4a0000;
            --text-color: #f3f4f6;
            --accent-color: #d3a625;
            --overlay: rgba(74, 0, 0, 0.85);
        }

        .theme-slytherin {
            --bg-color: #0d2818;
            --text-color: #e5e7eb;
            --accent-color: #aaaaaa;
            --overlay: rgba(13, 40, 24, 0.85);
        }

        .theme-hufflepuff {
            --bg-color: #eab308;
            --text-color: #111827;
            --accent-color: #000000;
            --overlay: rgba(234, 179, 8, 0.90);
        }

        .theme-ravenclaw {
            --bg-color: #0f172a;
            --text-color: #f8fafc;
            --accent-color: #946b2d;
            --overlay: rgba(15, 23, 42, 0.85);
        }

        /* Aplicação dinâmica das variáveis */
        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background-color 0.8s ease, color 0.8s ease;
        }

        .accent-text { color: var(--accent-color); transition: color 0.8s ease; }
        .accent-bg { background-color: var(--accent-color); transition: background-color 0.8s ease; }
        .bg-overlay { background-color: var(--overlay); transition: background-color 0.8s ease; }

        /* Estrutura de Scroll do Comboio (Parallax Simples) */
        .train-section {
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* Cria a ilusão de passagem pelas carruagens */
        }

        /* 
         * NOTA: Substitui os URLs pelas tuas imagens reais.
         * Cabina = locomotiva. Carruagem 1/2 = interior ou exterior das carruagens.
         */
        #engine { background-image: url('https://images.unsplash.com/photo-1541781287310-843dc03ea890?q=80&w=2000&auto=format&fit=crop'); }
        #carriage-1 { background-image: url('https://images.unsplash.com/photo-1473445749005-1815b8214300?q=80&w=2000&auto=format&fit=crop'); }
        #carriage-2 { background-image: url('https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?q=80&w=2000&auto=format&fit=crop'); }
    </style>
</head>
<body class="theme-gryffindor font-sans antialiased selection:bg-[var(--accent-color)] selection:text-[var(--bg-color)]">

    <!-- Navegação Fixa -->
    <nav class="fixed top-0 w-full z-50 bg-overlay backdrop-blur-sm border-b border-[var(--accent-color)]/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <!-- Logo: Contorno da Cabina & Título -->
                <div class="flex items-center gap-3">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--accent-color)" stroke-width="1.5" class="w-8 h-8 transition-colors duration-800">
                        <!-- Chaminé -->
                        <path d="M7 6v4" stroke-linecap="round"/>
                        <path d="M5 6h4" stroke-linecap="round"/>
                        <!-- Caldeira e Cabina -->
                        <path d="M4 10h12v10H4z"/>
                        <path d="M16 12h4v8h-4z"/>
                        <path d="M16 10v2" stroke-linecap="round"/>
                        <!-- Rodas -->
                        <circle cx="8" cy="20" r="2"/>
                        <circle cx="18" cy="20" r="2"/>
                        <!-- Detalhes do limpa-neves frontal -->
                        <path d="M4 16l-2 4h2"/>
                    </svg>
                    <span class="font-bold text-xl tracking-wider">Plataforma 9 ¾</span>
                </div>

                <!-- Botão de Troca de Casa (Tema) -->
                <button id="theme-btn" class="px-4 py-2 rounded-full text-sm font-semibold accent-bg text-[var(--bg-color)] hover:opacity-80 transition-all flex items-center gap-2 shadow-lg shadow-[var(--accent-color)]/20">
                    <span id="house-name">Gryffindor</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Seção 1: Cabina de Condução (Hero) -->
    <section id="engine" class="train-section min-h-screen flex items-center justify-center relative">
        <div class="absolute inset-0 bg-overlay"></div>
        <div class="relative z-10 text-center px-4 max-w-3xl">
            <h1 class="text-5xl md:text-7xl font-bold mb-4">Onde a <span class="accent-text">Magia</span> Acontece.</h1>
            <p class="text-lg md:text-xl opacity-90 mb-8">Transformando linhas de código em feitiços funcionais. Bem-vindo à locomotiva do desenvolvimento web e infraestrutura.</p>
            <a href="#carriage-1" class="inline-block border-2 border-[var(--accent-color)] text-[var(--accent-color)] px-8 py-3 rounded-full font-semibold hover:bg-[var(--accent-color)] hover:text-[var(--bg-color)] transition-colors">
                Embarcar na Viagem
            </a>
        </div>
    </section>

    <!-- Seção 2: Primeira Carruagem (Skills / Tecnologias) -->
    <section id="carriage-1" class="train-section min-h-screen flex items-center relative border-t-4 border-[var(--bg-color)]">
        <div class="absolute inset-0 bg-overlay"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20">
            <h2 class="text-3xl md:text-5xl font-bold mb-12 border-b-2 border-[var(--accent-color)] inline-block pb-2">O Meu Grimório (Skills)</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-[var(--bg-color)]/80 p-6 rounded-lg border border-[var(--accent-color)]/20 backdrop-blur-md">
                    <h3 class="text-xl font-bold accent-text mb-3">Feitiços de Backend</h3>
                    <p class="opacity-80">Estruturação de bases de dados robustas e lógicas de servidor. PHP, MySQL, e scripts em Bash.</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-[var(--bg-color)]/80 p-6 rounded-lg border border-[var(--accent-color)]/20 backdrop-blur-md">
                    <h3 class="text-xl font-bold accent-text mb-3">Ilusões de Frontend</h3>
                    <p class="opacity-80">Criação de interfaces dinâmicas e responsivas. HTML, JavaScript e o poder do Tailwind CSS.</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-[var(--bg-color)]/80 p-6 rounded-lg border border-[var(--accent-color)]/20 backdrop-blur-md">
                    <h3 class="text-xl font-bold accent-text mb-3">Magia de Redes</h3>
                    <p class="opacity-80">Administração de sistemas, configuração de servidores Windows/Linux e infraestrutura de rede.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção 3: Segunda Carruagem (Projetos / Contactos) -->
    <section id="carriage-2" class="train-section min-h-screen flex items-center relative border-t-4 border-[var(--bg-color)]">
        <div class="absolute inset-0 bg-overlay"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full py-20 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Pronto para a Próxima Estação?</h2>
            <p class="text-lg opacity-90 mb-10 max-w-2xl mx-auto">Seja para construir uma aplicação web de raiz ou automatizar infraestruturas críticas, estou disponível para novas aventuras.</p>
            <a href="mailto:teu-email@exemplo.com" class="accent-bg text-[var(--bg-color)] px-10 py-4 rounded-full font-bold text-lg hover:opacity-80 transition-opacity inline-flex items-center gap-3">
                Enviar uma Coruja
                <span>✉️</span>
            </a>
        </div>
    </section>

    <!-- Script de Mudança de Tema -->
    <script>
        // Lógica das Casas
        const houses = [
            { id: 'theme-gryffindor', name: 'Gryffindor' },
            { id: 'theme-slytherin', name: 'Slytherin' },
            { id: 'theme-hufflepuff', name: 'Hufflepuff' },
            { id: 'theme-ravenclaw', name: 'Ravenclaw' }
        ];
        
        let currentHouseIndex = 0;
        const body = document.body;
        const themeBtn = document.getElementById('theme-btn');
        const houseNameSpan = document.getElementById('house-name');

        themeBtn.addEventListener('click', () => {
            // Remover classe da casa atual
            body.classList.remove(houses[currentHouseIndex].id);
            
            // Avançar para a próxima casa (fazendo loop)
            currentHouseIndex = (currentHouseIndex + 1) % houses.length;
            
            // Adicionar nova classe e atualizar texto
            body.classList.add(houses[currentHouseIndex].id);
            houseNameSpan.textContent = houses[currentHouseIndex].name;
        });
    </script>
</body>
</html>
