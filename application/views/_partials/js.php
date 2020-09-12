<!--
    Optional JavaScript
-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/moment.min.js') ?>"></script>
<script>
	const displayTime = () => {
	moment.locale('id');
	$('#time').text(moment().format('LTS'));
	$('#date').text(moment().format('LL'));
};

const updateTime = () => {
	displayTime();
	setTimeout(updateTime, 1000);
};

updateTime();
</script>
