var yeoman = require('yeoman-generator');
/*
*	acvtivityName是活动名字
*	cnName是活动的中文名字，主要用于注释和页面title
*   bgColor是背景颜色
*   floorBgColor是floor部分的背景颜色
*	midBannerBg 中部banner背景色
*/
var activityName='';
var cnName='';
var bgColor='';
var midBannerBg='';
var floorBgColor='';

var ShowGenerator = yeoman.generators.Base.extend({
	ask: function(){
		var done = this.async();
		
		this.log(this.yeoman);
		
		var prompts = [{
			type: 'input',
			name: 'activityName',
			message: '输入活动的英文名字，比如pg。',
		},{
			type:'input',
			name:'cnName',
			message:'输入活动的中文名，比如宝洁。'
		},{
			type:'input',
			name:'bgColor',
			message:'输入活动页面的背景颜色16进制码，如aaaaaa。'
		},{
			type:'input',
			name:'midBannerBg',
			message:'输入中部banner背景色16进制码，如ffffff'
		},{
			type:'input',
			name:'floorBgColor',
			message:'输入floor颜色16进制码，如ffffff'
		}];

		this.prompt(prompts, function(props){
			activityName = this.activityName = props.activityName;
			cnName = this.cnName = props.cnName;
			bgColor = this.bgColor = props.bgColor;
			midBannerBg = this.midBannerBg = props.midBannerBg;
			floorBgColor = this.floorBgColor = props.floorBgColor;
			this.filename = props.activityName;
			this.mkdir(this.filename);
		//	this.copy('banjia.tpl','banjia.tpl');
			done();
		}.bind(this));		

	},

	output:function(){
		console.log('稍等片刻。。。');
	},

	modify:function(){
		var tplData = {
			'cnName':cnName,
			'activityName':activityName
		};
		var lessData = {
			'activityName':activityName,
			'cnName':cnName,
			'bgColor':bgColor,
			'midBannerBg':midBannerBg,
			'floorBgColor':floorBgColor
		};
		this.template('model.tpl',this.activityName+'/'+this.activityName+'.tpl',tplData);
		this.template('model.php',this.activityName+'/'+this.activityName+'.php',tplData);
		this.template('model.less',this.activityName+'/'+this.activityName+'.less',lessData);
	}

});

module.exports = ShowGenerator;
