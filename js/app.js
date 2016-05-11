$( document ).ready(function() {
	console.log('message');
	$('.carousel').carousel();
	$('#search_form #s').typeahead({
      name: 's',
      local:["Bangkok","Ang Thong","Bueng Kan","Buriram","Chachoengsao","Chainat","Chaiyaphum","Chanthaburi","Chiang Mai","Chiang Rai","Chonburi","Chumphon","Kalasin","Kamphaeng Phet","Kanchanaburi","Khon Kaen","Krabi","Lampang","Lamphun","Loei","Lopburi","Mae Hong Son","Maha Sarakham","Nakhon Nayok","Nakhon Pathom","Nakhon Phanom","Nakhon Ratchasima","Nakhon Sawan","Nakhon Si Thammarat","Nan","Narathiwat","Nong Bua Lamphu","Nong Khai","Nonthaburi","Pathum Thani","Pattani","Phang Nga","Phatthalung","Phayao","Phetchabun","Phetchaburi","Phichit","Phra Nakhon Si Ayutthaya","Phrae","Phuket","Prachinburi","Prachuap Khiri Khan","Ranong","Ratchaburi","Rayong","Roi Et","Sakon Nakhon","Samut Prakan","Samut Sakhon","Samut Songkhram","Saraburi","Satun","Sing Buri","Sisaket","Songkhla","Sukhothai","Suphan Buri","Surat Thani","Surin","Tak","Trang","Trat","Ubon Ratchathani","Udon Thani","Uttaradit","Yala"]
    });
});  
