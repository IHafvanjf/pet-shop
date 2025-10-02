
const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
const navLinks = document.querySelector('.nav-links');
const overlay = document.querySelector('.overlay');
let isMenuOpen = false;

// Toggle mobile menu
function toggleMenu() {
    isMenuOpen = !isMenuOpen;
    mobileNavToggle.classList.toggle('active');
    navLinks.classList.toggle('active');
    overlay.classList.toggle('active');
    document.body.style.overflow = isMenuOpen ? 'hidden' : '';
}

mobileNavToggle.addEventListener('click', toggleMenu);
overlay.addEventListener('click', toggleMenu);

// Fechar menu ao clicar em um link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        if (isMenuOpen) toggleMenu();
    });
});

// Fechar menu com tecla ESC
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && isMenuOpen) toggleMenu();
});

// Evitar scroll quando o menu estiver aberto
window.addEventListener('resize', () => {
    if (window.innerWidth > 768 && isMenuOpen) {
        toggleMenu();
    }
});

$(document).ready(function() {
    let transporteSelecionado = ""; 

    // Captura a escolha do transporte quando o usuário clica nos botões
    $(".select-option").click(function() {
        transporteSelecionado = $(this).data("taxi") === "sim" ? "Pet Taxi" : "Levar";
    });

    $(".select-option").click(function() {
        taxiPet = $(this).data("taxi");
        $("#fase1").hide();
        $("#fase2").show();
    });

    // Seleção de serviços
    $(document).on("click", ".service-btn", function() {
        $(this).toggleClass("bg-green-500");
    });

    $("#salvar-servicos").click(function() {
        $("#fase2").hide();
        $("#fase3").show();

        if (taxiPet === "sim") {
            $("#form-taxi").show();
        } else {
            $("#form-taxi").hide();
        }
    });

    $("#proximo-calendario").click(function() {
        $("#fase3").hide();
        $("#fase4").show();
        flatpickr("#calendario", { enableTime: false, dateFormat: "d/m/Y" });
    });

    $("#proximo-horarios").click(function() {
        $("#fase4").hide();
        $("#fase5").show();
        let dataSelecionada = $("#calendario").val();
    
        if (!dataSelecionada) {
            alert("Por favor, selecione uma data antes de continuar.");
            return;
        }
    
        // Corrigir o formato da data para YYYY-MM-DD
        let partes = dataSelecionada.split("/");
        if (partes.length === 3) {
            dataSelecionada = `${partes[2]}-${partes[1]}-${partes[0]}`;
        }
    });
    
    $(document).on("click", ".horario-btn", function() {
        $(".horario-btn").removeClass("bg-green-500");
        $(this).addClass("bg-green-500");
    });

    let transporte = "Levar"; // Valor padrão

    // Adiciona evento para mudar o transporte ao clicar no botão
    document.querySelectorAll(".select-option").forEach(opcao => {
        opcao.addEventListener("click", function() {
            document.querySelectorAll(".select-option").forEach(btn => btn.classList.remove("bg-blue-700"));
            this.classList.add("bg-blue-700");
            transporte = this.dataset.taxi === "sim" ? "Pet Taxi" : "Levar";
        });
    });
    
    document.getElementById("finalizarAgendamento").addEventListener("click", function() {
        let nome = document.getElementById("nome").value;
        let telefone = document.getElementById("telefone").value;
        let email = document.querySelector("input[name='email']").value;
        let servicosSelecionados = [];
        let precoTotal = 0;
    
        document.querySelectorAll(".service-card.border-green-500").forEach(service => {
            servicosSelecionados.push({
                nome: service.querySelector(".service-title").innerText,
                preco: parseFloat(service.getAttribute("data-preco")),
                duracao: parseInt(service.getAttribute("data-duracao"))
            });
            precoTotal += parseFloat(service.getAttribute("data-preco"));
        });
    
        let data = document.getElementById("calendario").value;
        let horario = document.querySelector(".horario-btn.bg-green-500")?.dataset.horario || "";
        let duracao = servicosSelecionados.reduce((total, s) => total + s.duracao, 0);
        let observacao = document.querySelector(".obs-textarea").value;
    
        if (!nome || !telefone || !email || servicosSelecionados.length === 0 || !data || !horario) {
            alert("❌ Por favor, preencha todos os campos obrigatórios.");
            return;
        }
    
        // ⚠️ Verifica novamente na finalização se há sobreposição de horário
        let [h, m] = horario.split(":").map(Number);
        let horarioMinutos = h * 60 + m;
    
        if (verificaConflitoHorario(horarioMinutos, duracao)) {
            alert("❌ Esse serviço invade um horário já ocupado. Escolha outro horário.");
            return;
        }
    
        //  Se passou na verificação, envia os dados para o servidor
        let transporteSelecionado = document.querySelector(".select-option.bg-blue-700")?.dataset.taxi === "sim" ? "Pet Taxi" : "Levar";

        let dados = {
            nome,
            telefone,
            email,
            servicos: servicosSelecionados,
            preco_total: precoTotal,
            data,
            horario,
            duracao,
            observacao,
            transporte: transporteSelecionado
        };
    
        fetch("agendamento.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(dados)
        })
        .then(response => response.text())
        .then(data => {
            try {
                let jsonData = JSON.parse(data);
                
                if (jsonData.status === "success") {
                    alert("✅ Agendamento realizado com sucesso!");
                    window.location.reload();
                } else {
                    alert("❌ Erro: " + jsonData.message);
                }
            } catch (error) {
                alert("🚨 Erro inesperado. Verifique o console.");
            }
        })
        .catch(error => {
            alert("🚨 Erro na requisição: " + error);
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    flatpickr("#inline-calendario", {
        inline: true,
        dateFormat: "d/m/Y",
        minDate: "today",
        locale: {
            weekdays: {
                shorthand: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
                longhand: ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"]
            },
            months: {
                shorthand: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
                longhand: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"]
            },
            rangeSeparator: " até ",
            weekAbbreviation: "Sem",
            scrollTitle: "Role para aumentar",
            toggleTitle: "Clique para alternar"
        },
        onChange: function(selectedDates, dateStr) {
            document.getElementById("calendario").value = dateStr;
        }
    });
});

$(document).ready(function() {
    let total = 0;
    let frete = 15; // Valor fixo do frete
    let servicosSelecionados = [];

    $('.service-btn').click(function() {
        let card = $(this).closest('.service-card');
        let preco = parseInt(card.attr('data-preco'));

        if (card.hasClass('border-green-500')) {
            // Remove a seleção
            card.removeClass('border-green-500');
            servicosSelecionados = servicosSelecionados.filter(valor => valor !== preco);
        } else {
            // Adiciona a seleção
            card.addClass('border-green-500');
            servicosSelecionados.push(preco);
        }

        // Atualiza o total corretamente
        total = servicosSelecionados.length > 0 ? servicosSelecionados.reduce((acc, val) => acc + val, 0) : 0;
    });

    // Adiciona os horários
    let horarios = ['08:00', '09:00', '10:00', '11:00', '14:00', '15:00', '16:00'];
    horarios.forEach(horario => {
        $('#horarios-list').append(`<button class='horario-btn bg-gray-200 px-4 py-2 rounded m-1' data-horario='${horario}'>${horario}</button>`);
    });

    // Seleção do horário
    $(document).on('click', '.horario-btn', function() {
        $('.horario-btn').removeClass('bg-green-500');
        $(this).addClass('bg-green-500');
    });

    // Finalizar agendamento
    $('.finalizar-agendamento').click(function() {
        let horarioSelecionado = $('.horario-btn.bg-green-500').data('horario');

        if (!horarioSelecionado) {
            alert('Por favor, selecione um horário antes de finalizar.');
            return;
        }
        if (total === 0) {
            alert('Por favor, selecione um serviço antes de finalizar.');
            return;
        }

        let totalFinal = total + frete;
        $('#detalhes-valor').text(`Valor total: R$${totalFinal},00 (incluindo frete de R$${frete},00)\nHorário escolhido: ${horarioSelecionado}`);
        $('#modal-confirmacao').removeClass('hidden');
    });

    // Fechar modal
    $('.fechar-modal').click(function() {
        $('#modal-confirmacao').addClass('hidden');
    });
});

document.getElementById("calendario").addEventListener("change", function() {
    let dataSelecionada = this.value;

    // Converte DD/MM/AAAA → YYYY-MM-DD se necessário
    let partes = dataSelecionada.split("/");
    if (partes.length === 3) {
        dataSelecionada = `${partes[2]}-${partes[1]}-${partes[0]}`;
    }

    carregarHorarios(dataSelecionada);
});

let horariosOcupados = []; // Variável global para armazenar horários ocupados

function carregarHorarios(dataSelecionada) {
    console.log("📅 Buscando horários ocupados para:", dataSelecionada);

    fetch(`horarios_ocupados.php?data=${encodeURIComponent(dataSelecionada)}`)
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                console.error("❌ Erro ao carregar horários:", data.message);
                return;
            }

            horariosOcupados = data.horarios_ocupados; // Armazena os horários ocupados
            console.log("⏳ Horários ocupados:", horariosOcupados);

            let horariosContainer = document.getElementById("horarios-list");
            horariosContainer.innerHTML = ""; // Limpa os horários antes de renderizar

            let horariosDisponiveis = ["08:00", "08:30", "09:00", "09:30", "10:00", "10:30",
                                        "11:00", "11:30", "14:00", "14:30", "15:00", "15:30",
                                        "16:00", "16:30"];

            let duracaoServico = obterDuracaoServicoSelecionado(); // Busca a duração do serviço

            horariosDisponiveis.forEach((horario) => {
    let btn = document.createElement("button");
    btn.classList.add("horario-btn", "bg-green-500", "px-4", "py-2", "rounded", "m-1"); // 🟢 Agora inicia como verde
    btn.dataset.horario = horario;
    btn.innerText = horario;

    // Converte horário para minutos para facilitar cálculos
    let [horas, minutos] = horario.split(":").map(Number);
    let horarioMinutos = horas * 60 + minutos;

    let bloqueado = horariosOcupados.includes(horario); // Se já está ocupado
    let atravessaOutroHorario = verificaConflitoHorario(horarioMinutos, duracaoServico);

    if (bloqueado) {
        btn.classList.remove("bg-green-500"); // Remove verde se for ocupado
        btn.classList.add("bg-red-500", "cursor-not-allowed"); //  Vermelho → Bloqueado por estar ocupado
        btn.disabled = true;
    } else if (atravessaOutroHorario) {
        btn.classList.remove("bg-green-500"); // Remove verde se atravessa outro horário bloqueado
        btn.classList.add("bg-orange-500", "cursor-not-allowed"); //  Laranja → Bloqueado por atravessar outro horário
        btn.disabled = true;
    } else {
        btn.addEventListener("click", function() {
            document.querySelectorAll(".horario-btn").forEach(b => {
                // Mantém a cor dos horários ocupados e bloqueados
                if (!b.classList.contains("bg-red-500") && !b.classList.contains("bg-orange-500")) {
                    b.classList.remove("bg-green-700");
                    b.classList.add("bg-green-500"); // Mantém os disponíveis em verde fraco
                }
            });
        
            btn.classList.remove("bg-green-500"); // Remove verde fraco
            btn.classList.add("bg-green-700"); //  Deixa o selecionado em verde escuro
        });
        
    }

    horariosContainer.appendChild(btn);
});

            
        })
        .catch(error => console.error("❌ Erro ao buscar horários:", error));
}


// Função para verificar se um horário invade outro já ocupado
function verificaConflitoHorario(horarioMinutos, duracaoServico) {
    for (let i = 0; i < duracaoServico; i += 30) {
        let horarioChecado = horarioMinutos + i;
        let horarioFormatado = `${String(Math.floor(horarioChecado / 60)).padStart(2, "0")}:${String(horarioChecado % 60).padStart(2, "0")}`;
        
        if (horariosOcupados.includes(horarioFormatado)) {
            return true; 
        }
    }
    return false;
}

// Função para obter a duração total do serviço selecionado
function obterDuracaoServicoSelecionado() {
    let servicosSelecionados = document.querySelectorAll(".service-card.border-green-500");
    let duracaoTotal = 0;

    servicosSelecionados.forEach(servico => {
        duracaoTotal += parseInt(servico.getAttribute("data-duracao")) || 0;
    });

    return duracaoTotal || 30; 
}

// Atualiza os horários quando os serviços forem alterados
document.querySelectorAll(".service-btn").forEach(btn => {
    btn.addEventListener("click", function() {
        setTimeout(() => {
            let dataSelecionada = document.getElementById("calendario").value;
            if (dataSelecionada) carregarHorarios(dataSelecionada);
        }, 300);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("proximo-horarios").addEventListener("click", function () {
        let dataInput = document.getElementById("calendario").value;
    
        if (!dataInput) {
            alert("Por favor, selecione uma data primeiro.");
            return;
        }
    
        // ✅ Converter data para o formato YYYY-MM-DD antes de enviar
        let partesData = dataInput.split("/"); 
        let dataFormatada = `${partesData[2]}-${partesData[1]}-${partesData[0]}`; // YYYY-MM-DD
    
        carregarHorarios(dataFormatada);
    });

    // Atualiza os horários sempre que um serviço for selecionado
    document.querySelectorAll(".service-btn").forEach(btn => {
        btn.addEventListener("click", function () {
            setTimeout(() => {
                let dataSelecionada = document.getElementById("calendario").value;
                if (dataSelecionada) carregarHorarios(dataSelecionada);
            }, 300);
        });
    });
});

$(document).ready(function () {
    function ajustarRodape() {
        let fase2Ativa = $("#fase2").is(":visible");

        if ($(window).width() <= 480) { 
            if (fase2Ativa) {
                $("body").addClass("fase2-ativa");
            } else {
                $("body").removeClass("fase2-ativa");
            }
        }
    }

    $(".select-option, #salvar-servicos, #proximo-calendario, #proximo-horarios, #finalizarAgendamento").click(function () {
        setTimeout(ajustarRodape, 300);
    });

    ajustarRodape(); // Chama a função ao carregar a página
    $(window).resize(ajustarRodape); // Ajusta ao redimensionar
});