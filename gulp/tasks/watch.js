module.exports = function() {
    $.gulp.task("watch", function() {
        return new Promise((res, rej) => {
            $.watch(["./src/views/**/index.html", "!./src/views/includes/**/*.html"], $.gulp.series("html"));
            $.watch("./src/styles/**/main.scss", $.gulp.series("styles"));
            $.watch(["./src/images/**/*.{jpg,jpeg,png,gif,svg}", "!./src/images/icons/svg/*.svg", "!./src/images/favicons/*.{jpg,jpeg,png,gif}"], $.gulp.series("images"));
            $.watch("./src/js/**/*.js", $.gulp.series("scripts"));
            res();
        });
    });
};