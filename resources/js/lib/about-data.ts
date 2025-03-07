type AboutDataProps = {
      title: string;
      description: string;
      icon: string;
      showOP: boolean;
      opportuinites: string[];
};
export const AboutData: AboutDataProps[] = [
      {
            title: 'Partnership',
            description: `Are you looking to elevate your brand's voice and reach a wider audience? On our podcast, we're dedicated to helping you shine. We'll collaborate with you to produce engaging, media-facing content that showcases your expertise and products. As a valued partner, you'll gain exclusive access to our state-of-the-art studios, where you can record interviews, product demos, and more. Plus, enjoy unique experiences throughout the year`,
            icon: '/images/icon-teamwork.svg',
            showOP: true,
            opportuinites: [
                  "Spotlight series",
                  "Partnering for impact",
                  "Community connection",
                  "Growth and Guidance",
                  "Podcast production and distribution",
                  "Creator Network",
                  "Live Event and Podcast Recording",
                  "Branded content Partnership",
                  "Talent Showcase",
                  "Increase your brand's visibility and credibility",
                  "Advertising opportunities to reach a targeted audiences",
                  "Premier spaces to showcase your product and build brand awareness"
            ]
      },
      {
            title: "Content Opportunities",
            description: `
                  By partnering with Media Setroom studios, you'll gain access to:
            `,
            icon: "/images/icon-startup.svg",
            showOP: false,
            opportuinites: [
                  "Increase brand awareness and reach a wider audience",
                  "Create engaging and memorable experiences for your fans",
                  "Position your brand as a thought leader and industry expert",
                  "Candid performances and interviews with industry experts and thought leaders",
                  "One-of-a-kind content opportunities, such as podcast episodes, video series, and live events",
                  "Town hall events and Q&A sessions, where your fans can connect with your brand and industry experts",
            ]
      }, {
            title: "Experiential",
            description: `Podcast at Media Setroom studios offer a truly unique, exclusive space with legendary appeal.
                  Our studios are fully equipped with the latest video and audio technology, allowing us to offer:`,
            icon: "/images/icon-target.svg",
            showOP: true,
            opportuinites: [
                  "High-quality video production and live streaming capabilities",
                  "Professional recording and editing services for podcast and video content"
            ]
      }
]
